import requests

url = 'http://localhost:10000/index.php?page=/etc/passwd'  

try:
    response = requests.get(url)
    if("root:x:0:0:root:/root:/bin/bash" in response.text):
        print("LFI !!!")
    else:
        print("Well Done!")
except:
    print("Well Done!")
