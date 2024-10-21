from bs4 import BeautifulSoup
import requests

url = "http://192.168.1.27/BSK/strona.html"

response = requests.get(url).content
soup = BeautifulSoup(response, 'html.parser')
products = soup.find_all("div", {"class": "product-card"})
titles = []
descriptions = []
prices = []
for product in products:
    title = product.find("div", {"class": "product-title"})
    description = product.find("div", {"class": "product-description"})
    price = product.find("div", {"class": "product-price"})
    print(title, description, price)