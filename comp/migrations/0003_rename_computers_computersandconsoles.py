# Generated by Django 5.0.6 on 2024-06-09 19:43

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('comp', '0002_reservation_status'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='Computers',
            new_name='ComputersAndConsoles',
        ),
    ]
