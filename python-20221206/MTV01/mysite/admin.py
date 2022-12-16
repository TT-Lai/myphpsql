from django.contrib import admin
from mysite.models import Product, NewTable
from .models import Product, NewTable

# Register your models here.

class NewTableAdmin(admin.ModelAdmin):
    list_display = ('models_f','bool_f','date_f','char_f','datetime_f')
admin.site.register(NewTable, NewTableAdmin)
class ProductAdmin(admin.ModelAdmin):
    list_display = ('sku','name','price','size','Qty')
admin.site.register(Product, ProductAdmin)