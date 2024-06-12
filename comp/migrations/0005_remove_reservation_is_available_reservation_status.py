# Generated by Django 5.0.6 on 2024-06-09 20:28

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('comp', '0004_remove_reservation_status_reservation_is_available'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='reservation',
            name='is_available',
        ),
        migrations.AddField(
            model_name='reservation',
            name='status',
            field=models.IntegerField(choices=[(1, 'Забронировано'), (3, 'Отменено'), (2, 'Доступно')], default=2),
        ),
    ]
