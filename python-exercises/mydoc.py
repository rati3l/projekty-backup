import importlib
# import pandas
import inspect
import importlib


def drukuj(funkcja_klasa,tekst, nazwa):

    print(funkcja_klasa,nazwa,end = '\n\n')
    print('\t',tekst.replace('\n','\n\t'),
          sep='', end = '\n'*4)
    return 1

# def szukaj()


def zbieracz(nazwa,modul,funkcja_klasa=None,slowoklucz=None):
    przeszukiwanie = 0
    
    for item in inspect.getmembers(modul):

        docstring = str(item[1].__doc__)
#TODO
#rozbić listę funkcja klasa na dwie części i przeiterować        
        if 'class' in docstring:
            if (slowoklucz == None) or (slowoklucz in docstring):
                przeszukiwanie = drukuj(funkcja_klasa, docstring, item[0])
        
    if przeszukiwanie ==0:
        print(f'{slowoklucz} not found in {nazwa}')


def main(args):
    #args
    #0 - filename
    #1 - module
    #2 - slowoklucz
    #3 - funkcja_klasa  f / c - function/class
    if len(args) < 2:
        print('asdf')
        sys.exit(1)
    
    try:
        slowoklucz = args[2]
    except IndexError:
        slowoklucz = None
    print(slowoklucz)
    try:
        funkcja_klasa = args[3]
    except IndexError:
        funkcja_klasa = None
    
    
    nazwa = args[1]
    try:
        modul = importlib.import_module(nazwa)
        
    except ModuleNotFoundError:
        print(f'module {nazwa} not found')# print(pandas.__doc__)
        sys.exit(1)
    zbieracz(nazwa,modul,funkcja_klasa,slowoklucz)   

# zbieracz('function')

if __name__ == "__main__":
    import sys
    main(sys.argv)