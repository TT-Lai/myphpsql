# Generated by Django 4.0.5 on 2022-12-09 05:59

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('mainsite', '0003_alter_post_options'),
    ]

    operations = [
        migrations.RenameField(
            model_name='post',
            old_name='subject',
            new_name='slug',
        ),
    ]