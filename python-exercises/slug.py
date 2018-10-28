def make_slug(str):
    import re
    regex = re.compile('\W')
    plik = re.sub('\W','-',str)
    plik = re.sub('-{2,}','-', plik)
    plik = re.sub('-$|^-','', plik)
    
    print(plik)
import sys

make_slug('}{:?><}:{:zxc-=+!@#$zxczxc}')
