import requests
from bs4 import BeautifulSoup

url = 'http://localhost:10000/?name=<script>alert(1);</script>'  
response = requests.get(url)

if response.status_code == 200:
    alert = '''<p>Hi! <script>alert(1);</script></p><form method="get" action="">'''
    if(alert in response.text):
        print("XSS Detected :(")
    else:
        print("Well Done!")
else:
    print(f'Error: {response.status_code}')
