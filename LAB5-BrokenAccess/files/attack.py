import requests

url = "http://localhost:10000/user2.php"

cookie = {"PHPSESSID":"850ea2e9a9287951dced43b01d8f3a1b"}

response = requests.get(url, cookies=cookie)

if("user2" in response.text):
    print("Broken Access Control!!!")
else:
    print("Well Done!")