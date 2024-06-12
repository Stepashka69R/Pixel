from django import forms
from django.contrib.auth.forms import(
    UserCreationForm,
    AuthenticationForm,
    PasswordResetForm,
    PasswordChangeForm)
from .models import User, ComputersAndConsoles


class UserRegForm(UserCreationForm):
    username = forms.CharField(label="", widget=forms.TextInput(attrs={
        'class': 'form-control', 'placeholder': 'Имя пользователя'
    }))
    email = forms.EmailField(label="", widget=forms.EmailInput(attrs={
        'class': 'form-control', 'placeholder': 'email'
    }))
    password1 = forms.CharField(widget=forms.PasswordInput(attrs={
        'class': 'form-control', 'placeholder': 'Введите пароль'
    }))
    password2 = forms.CharField(label="", widget=forms.PasswordInput(attrs={
        'class': 'form-control', 'placeholder': 'Подтвердите пароль'
    }))

    class Meta:
        model = User
        fields = ('username', 'email', 'password1', 'password2')


class LoginUserForm(AuthenticationForm):
    username = forms.CharField(widget=forms.TextInput(attrs={
        'class': 'form-control', 'placeholder': 'Имя пользователя'
    }))
    password = forms.CharField(widget=forms.PasswordInput(attrs={
        'class': 'form-control', 'placeholder': 'Пароль'
    }))

    class Meta:
        model = User
        fields = ('username', 'password')


# class ComputersAddForm(forms.ModelForm):
    # class Meta:
    #     model = ComputersAndConsoles
    #     fields =


class ChangePasswordForm(PasswordChangeForm):
    old_password = forms.CharField(widget=forms.PasswordInput(attrs={
        'class': 'form-control', 'placeholder': 'Введите старый пароль'
    }))
    new_password1 = forms.CharField(widget=forms.PasswordInput(attrs={
        'class': 'form-control', 'placeholder': 'Введите новый пароль'
    }))
    new_password2 = forms.CharField(widget=forms.PasswordInput(attrs={
        'class': 'form-control', 'placeholder': 'Подтвердите новый пароль'
    }))

    class Meta:
        model = User
        fields = ('old_password', 'new_password1', 'new_password2')


class ResetPassForm(PasswordResetForm):
    email = forms.EmailField(widget=forms.EmailInput(attrs={
        'class': 'form-control', 'placeholder': 'Введите ваш email'
    }))

    class Meta:
        model = User
        fields = ('email')