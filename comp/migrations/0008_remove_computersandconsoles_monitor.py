# Generated by Django 5.0.6 on 2024-06-10 12:14

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('comp', '0007_remove_statistics_creates_at'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='computersandconsoles',
            name='monitor',
        ),
    ]