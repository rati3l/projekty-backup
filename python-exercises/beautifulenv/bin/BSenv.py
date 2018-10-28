from bs4 import BeautifulSoup
import requests

soup = BeautifulSoup(requests.get('http://google.com').text,'html.parser')


for link in soup.find_all('a'):
    print(link.get('href'))
