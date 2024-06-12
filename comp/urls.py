from django.urls import path
from comp import views
from comp.views import *
from django.contrib.auth.views import (
     LogoutView,
     PasswordResetDoneView,
     PasswordChangeDoneView
)

urlpatterns = [
    path('', index, name='index'),
    path('auth/', views.LoginUserView.as_view(), name='login_pg'),
    path('registration/', views.RegistrationView.as_view(), name='reg_pg'),
    path('logout', LogoutView.as_view(), name='logout'),

    #password-reset
    path('password_reset/', views.ResetPasswordView.as_view(), name='password_reset'),
    path('reset/<uidb64>/<token>/', views.ConfirmPassResetView.as_view(), name='confirm_reset'),
    path('password/change/', views.ChangePasswordView.as_view(), name='password_change'),
    path('password/reset/done/', PasswordResetDoneView.as_view(), name='password_reset_done'),
    path('computers_list/', views.ComputersListView.as_view(), name='comp_list')
    # path('password/change/done/', PasswordChangeDoneView.as_view(), name='password_change_done')
]