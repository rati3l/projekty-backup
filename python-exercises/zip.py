import zipfile
import sys

def main(args):
    print(args)
    listaplikow = [filenames for filenames in args[2:len(args)]]
    nazwaarchiwum = args[1]

    print(listaplikow)
    
    with zipfile.ZipFile(nazwaarchiwum,'a') as paczka:
        
        archiwizer = lambda x: paczka.write(x)
        
        for item in listaplikow:
            archiwizer(item)

if __name__ == '__main__':
    
    if len(sys.argv)< 3:
        print('usage: python zip.py *arch_name* *file1* *file2* ...')
    else:
        main(sys.argv)