from django.contrib.auth.tokens import default_token_generator
from django.shortcuts import render
from django.utils.encoding import force_bytes
from django.utils.http import urlsafe_base64_encode
from django.views.generic import CreateView, ListView, View
from django.contrib.auth.views import (
    LoginView,
    PasswordResetConfirmView,
    PasswordResetView,
    PasswordChangeView
)
from .forms import *
from django.urls import reverse_lazy
from .models import *
from django.core.mail import send_mail
from django.conf import settings
from django.shortcuts import redirect


def index(request):
    return render(request, 'comp/index.html')


class RegistrationView(CreateView):
    template_name = 'users/registration.html'
    form_class = UserRegForm
    success_url = reverse_lazy('index')

    def form_invalid(self, form):
        print(form.errors)
        return super().form_invalid(form)


class LoginUserView(LoginView):
    template_name = 'users/auth.html'
    form_class = LoginUserForm

    def form_invalid(self, form):
        return super().form_invalid(form)


# class ComputersAddView(CreateView):
#     model = ComputersAndConsoles
#     template_name = 'comp/computers.html'
#
#     def get_queryset(self):
#         computers = ComputersAndConsoles.objects.filter(is_available=True)
#         return computers


class ChangePasswordView(PasswordChangeView):
    form_class = ChangePasswordForm
    success_url = reverse_lazy('password_reset_done')


class ConfirmPassResetView(PasswordResetConfirmView):
    template_name = 'users/password_reset_confirm.html'
    form_class = ChangePasswordForm
    success_url = reverse_lazy('password_reset_done')


class ResetPasswordView(PasswordResetView):
    template_name = 'users/password_reset.html'
    model = User
    form_class = ResetPassForm
    email_template_name = 'users/password_reset_email.html'
    success_url = reverse_lazy('password_reset_done')

    def form_valid(self, form):
        request = self.request
        form.save(
            request=request,
            use_https=request.is_secure(),
            email_template_name=self.email_template_name,
        )

        email = form.cleaned_data['email']
        user = User.objects.get(email=email)
        domain = request.get_host()
        protocol = 'https' if request.is_secure() else 'http'

        uid = urlsafe_base64_encode(force_bytes(user.pk))
        token = default_token_generator.make_token(user)

        reset_url = '{}://{}{}'.format(
            protocol,
            domain,
            reverse_lazy('confirm_reset', kwargs={'uidb64': uid, 'token': token})
        )

        subject = 'Восстановление пароля'
        message = 'Чтобы восстановить пароль перейдите по ссылке {}'.format(reset_url)

        send_mail(
            subject=subject,
            message=message,
            recipient_list=[email],
            from_email=settings.EMAIL_HOST_USER,
            fail_silently=False
        )

        return super().form_valid(form)


class ComputersListView(ListView):
    model = ComputersAndConsoles
    template_name = 'comp/computers_list.html'
    context_object_name = 'comps'


class ComputersAddView(View):
    model = ComputersAndConsoles
    success_url = reverse_lazy('index')

    def post(self, request, comp_id):
        comp = ComputersAndConsoles.objects.get(id=comp_id)
        reservation = Reservation.objects.filter(user=request.user, computer_id=comp)

        if reservation.exists():
            reserv = reservation.first()
            reserv.save()
        else:
            reserv = Reservation.objects.create(user=request.user, computer_id=comp)
            reserv.save()

        return redirect('index')




