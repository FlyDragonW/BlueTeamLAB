import requests

url = "http://localhost:10000/login.php"

data = {'username':"' or 1 #", 'password':'a'}

response = requests.post(url, data)

print(response.text)

if("Welcome" in response.text):
    print("SQL injection detected!")
else:
    print("Well Done!")