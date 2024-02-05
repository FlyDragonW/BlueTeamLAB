from selenium import webdriver

driver = webdriver.Firefox()

url = 'http://localhost:10000/?name=<script>alert(1);</script>'  

driver.get(url)

try:
    alert = driver.switch_to.alert
    print("XSS Detected :(")
    driver.quit()
except:
    print("Well Done!")
    driver.quit()
