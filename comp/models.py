from django.db import models
from django.contrib.auth.models import User


class ReservationStatus(models.IntegerChoices):
    BOOKED = 1, "Забронировано"
    AVAILABLE = 2, "Доступно"
    CANCELED = 3, "Отменено"


class ComputersAndConsoles(models.Model):
    name = models.CharField(max_length=100)
    price_per_hour = models.DecimalField(max_digits=10, decimal_places=2)
    is_available = models.BooleanField(default=True)
    # available_time = models.DateTimeField()
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    def __str__(self):
        return self.name


class Reports(models.Model):
    data = models.DateTimeField() #дата за которую ведется отчет
    income = models.DecimalField(max_digits=10, decimal_places=2)
    updated_at = models.DateTimeField(auto_now=True)
    computer = models.ForeignKey(to=ComputersAndConsoles, on_delete=models.CASCADE)


class Statistics(models.Model):
    data = models.DateTimeField() #дата за которую ведется статистика
    updated_at = models.DateTimeField(auto_now=True)
    computer = models.ForeignKey(to=ComputersAndConsoles, on_delete=models.CASCADE)


class Reservation(models.Model):
    RESERVATION_STATUS = [
        (ReservationStatus.BOOKED, ReservationStatus.BOOKED.label),
        (ReservationStatus.CANCELED, ReservationStatus.CANCELED.label),
        (ReservationStatus.AVAILABLE, ReservationStatus.AVAILABLE.label)
    ]
    start_date = models.DateTimeField(auto_now_add=True)
    end_date = models.DateTimeField(auto_now_add=True)
    status = models.IntegerField(choices=RESERVATION_STATUS, default=ReservationStatus.AVAILABLE)
    user = models.ForeignKey(to=User, on_delete=models.CASCADE)
    computer = models.ForeignKey(to=ComputersAndConsoles, on_delete=models.CASCADE)

    def __str__(self):
        return self.get_status_display()






