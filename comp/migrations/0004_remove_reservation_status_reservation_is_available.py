# Generated by Django 5.0.6 on 2024-06-09 20:23

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('comp', '0003_rename_computers_computersandconsoles'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='reservation',
            name='status',
        ),
        migrations.AddField(
            model_name='reservation',
            name='is_available',
            field=models.BooleanField(default=True),
        ),
    ]
