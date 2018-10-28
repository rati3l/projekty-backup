import urllib
import urllib.request

def main(adres):

    try:
        with urllib.request.urlopen(adres) as s:

            nazwa_pliku = (urllib.parse.urlsplit(adres).path.split('/')[-1]).split('.')[0]+'html'
            if nazwa_pliku == 'html':
                nazwa_pliku = 'index.html'
            
            kodowanie = s.info().get_content_charset()

            print(f'zapisuje {adres} jako {nazwa_pliku}')
            with open(nazwa_pliku, 'w') as p:
                p.write(s.read().decode(kodowanie))
                
    except urllib.error.HTTPError:
        print("HTTP Error 404: not found")
        
    






if __name__ == '__main__':
    import sys
    main(sys.argv[1])