# Generated by Django 4.0.5 on 2022-12-07 12:47

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('mainsite', '0002_rename_slug_post_subject'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='post',
            options={'ordering': ('pub_date',)},
        ),
    ]
