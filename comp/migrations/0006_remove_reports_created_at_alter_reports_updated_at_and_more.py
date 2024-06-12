# Generated by Django 5.0.6 on 2024-06-09 20:30

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('comp', '0005_remove_reservation_is_available_reservation_status'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='reports',
            name='created_at',
        ),
        migrations.AlterField(
            model_name='reports',
            name='updated_at',
            field=models.DateTimeField(auto_now=True),
        ),
        migrations.AlterField(
            model_name='reservation',
            name='end_date',
            field=models.DateTimeField(auto_now_add=True),
        ),
    ]