from django.shortcuts import render
from django.http import HttpResponse
from mysite.models import Product
import random
from django.http import Http404
# Create your views here.
def about(request):
    quotes = ['今日事，今日畢',
    '要怎麼收穫，先那麼栽',
    '知識就是力量',
    '一個人的個性就是他的命運']
    quote = random.choice(quotes)
    return render(request, 'about.html', locals())  

def listing(request):
    products = Product.objects.all()
    return render(request, 'list.html', locals())

def disp_detail(request, sku):
    try:
        p = Product.objects.get(sku=sku)
    except Product.DoesNotExist:
        raise Http404('找不到指定的品項編號')
        #return HttpResponse('找不到指定的品項編號')
        #return HttpResponseNotFound('<h1>Page not found</h1>')
    return render(request, 'disp.html', locals())

"""def listing(request):
    html = '''
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset='utf-8'>
    <title>中古機列表</title>
    </head>
    <body>
    <h2>以下是目前本店販售中的二手機列表</h2>
    <hr>
    <table width=400 border=1 bgcolor='#ccffcc'>
    {}
    </table>
    </body>
    </html>
    '''
    products = Product.objects.all()
    tags = '<tr><td>品名</td><td>售價</td><td>庫存量</td></tr>'
    for p in products:
        tags = tags + '<tr><td>{}</td>'.format(p.name)
        tags = tags + '<td>{}</td>'.format(p.price)
        tags = tags + '<td>{}</td></tr>'.format(p.Qty)
    return HttpResponse(html.format(tags))"""


"""def about(request):
    html = '''<!DOCTYPE html>
        <html><head><title>About Myself</title></head>
        <body><h2>Andy Wood</h2><hr>
        <p>Hi, I am Andy Wood. Nice to meet you!</p>
        </body>
        </html>
        '''
    return HttpResponse(html) """