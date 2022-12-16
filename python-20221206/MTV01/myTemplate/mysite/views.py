from django.shortcuts import render
from datetime import datetime

# Create your views here.

def carprice(request, maker=0):
    car_maker = ['Ford', 'Honda', 'Mazda']
    car_list = [
        [{'model':'Fiesta', 'price': 203500},
         {'model':'Focus','price': 605000},
         { 'model':'Mustang','price': 900000}],
        [{'model':'Fit', 'price': 450000}, 
         {'model':'City', 'price': 150000}, 
         {'model':'NSX', 'price':1200000}],
        [{'model':'Mazda3', 'price': 329999}, 
         {'model':'Mazda5', 'price': 603000},
         {'model':'Mazda6', 'price':850000}],
         ]
    maker = maker
    maker_name =  car_maker[maker]
    cars = car_list[maker]
    return render(request, 'carprice.html', locals())

def carlist(request, maker=0):
    car_maker = ['SAAB', 'Ford', 'Honda', 'Mazda', 'Nissan','Toyota' ]
    car_list = [ [],
    ['Fiesta', 'Focus', 'Modeo', 'EcoSport', 'Kuga', 'Mustang'],
    ['Fit', 'Odyssey', 'CR-V', 'City', 'NSX'],
    ['Mazda3', 'Mazda5', 'Mazda6', 'CX-3', 'CX-5', 'MX-5'],
    ['Tida', 'March', 'Livina', 'Sentra', 'Teana', 'X-Trail', 'Juke', 'Murano'],
    ['Camry','Altis','Yaris','86','Prius','Vios', 'RAV4', 'Wish']
    ]
    maker = maker
    maker_name =  car_maker[maker]
    cars = car_list[maker]
    return render(request, 'carlist.html', locals())

def index(request, tvno = 0):
    tv_list = [{'name':'Sky NewS', 'tvcode':'9Auq9mYxFEE'},
        {'name':'NBC News', 'tvcode':'MrllKeyld54'},
        {'name':'FOX Weather', 'tvcode':'O6pGuFmhe0g'},
        {'name':'Time Now', 'tvcode':'U9vaZrw_cyc'},
        {'name':'東森', 'tvcode':'dxpWqjvEKaM'},
        {'name':'民視', 'tvcode':'XxJKnDLYZz4'},
        {'name':'台視', 'tvcode':'yk2CUjbyyQY'},
        {'name':'華視', 'tvcode':'TL8mmew3jb8'},
        {'name':'TVBS', 'tvcode':'Hu1FkdAOws0'},
        {'name':'中視', 'tvcode':'XBne4oJGEhE'},
        {'name':'冰雪奇緣2', 'tvcode':'d_zVfl4bpJI'},
        {'name':'diy', 'tvcode':'UqZ8Um5MZEA'},]
    now = datetime.now()
    hour = now.timetuple().tm_hour
    tvno = tvno
    tv = tv_list[tvno]
    return render(request, 'index.html', locals())

def engtv(request, tvno='0'):
    tv_list = [{'name':'SkyNews', 'tvcode':'99U4CH_k5F0'},
    {'name':'Euro News', 'tvcode':'F-uW_IswLh8'},
    {'name':'India News', 'tvcode':'E7dbhET6_EA'},
    {'name':'CCTV', 'tvcode':'vCDDYb_M2B4'},]
    now = datetime.now()
    tvno = tvno
    tv = tv_list[int(tvno)]
    return render(request, 'engtv.html', locals())



"""def yt(request, tvno = 0):
    tv_list = [{'name':'Sky NewS', 'tvcode':'9Auq9mYxFEE'},
        {'name':'NBC News', 'tvcode':'MrllKeyld54'},
        {'name':'FOX Weather', 'tvcode':'O6pGuFmhe0g'},
        {'name':'Time Now', 'tvcode':'U9vaZrw_cyc'},]
    now = datetime.now()
    tvno = tvno
    tv = tv_list[tvno]
    return render(request, 'tv.html', locals())"""