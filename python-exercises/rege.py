import re
import urllib
import urllib.request







def main(adres):

    try:
        with urllib.request.urlopen(adres) as s:
            kodowanie = s.info().get_content_charset()
            plik = (s.read().decode(kodowanie))
                
    except urllib.error.HTTPError:
        print("HTTP Error 404: not found")
        
    regex = re.compile('<.*?>| .* \n')
    plik = re.sub(regex,'',plik)
    plik = re.sub(' .* \n','',plik)

    print(plik)






if __name__ == '__main__':
    import sys
    main(sys.argv[1])