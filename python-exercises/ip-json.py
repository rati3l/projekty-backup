import json
# import urllib
import urllib.request

with urllib.request.urlopen('http://httpbin.org/get') as s:
    plik = (s.read())
    x = json.loads(plik)
    print(x["origin"])
            