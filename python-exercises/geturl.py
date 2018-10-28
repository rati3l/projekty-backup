import re
import urllib
import urllib.request

def main(adres):

    try:
        with urllib.request.urlopen(adres) as s:
            kodowanie = s.info().get_content_charset()
            if kodowanie != None:
                plik = (s.read().decode(kodowanie))
            else:
                plik = (s.read().decode('utf-8'))
    except urllib.error.HTTPError:
        print("HTTP Error 404: not found")
        
    regex = re.compile('(http.*?[^\s]+)|(www\.\w{1,}\.\w{1,3})')
    plik = re.findall(regex,plik)
    
    for i in plik:
        print(i[0])






if __name__ == '__main__':
    import sys
    main('https://docs.microsoft.com/en-us/sql/linux/sql-server-linux-setup?view=sql-server-2017')