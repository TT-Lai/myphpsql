from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def homepage(request):
    return HttpResponse("Hello world!")
def about(request, author_no = 0):
    html = "<h2>Here is Author:{}'s about page!</h2><hr>".format(author_no)
    return HttpResponse(html)
def company(request):
    return HttpResponse("My Company")
def sales(request):
    return HttpResponse("My sales")
def contact(request):
    return HttpResponse("My contact")