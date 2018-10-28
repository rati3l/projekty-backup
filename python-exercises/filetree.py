import os

def pomocnik(slownik, item, iloscmyslnikow):
    for rzecz in range(len(slownik[item])):
        justowanie =' '* (len(iloscmyslnikow)-1) + '|' + '-' * (len(os.path.split(item)[1])-1)
        plik = slownik[item][rzecz]

        czy_plik = os.path.join(item, plik)
        if rzecz == len(slownik[item])-1 and os.path.isfile(os.path.join(czy_plik)):
            print('|',justowanie.replace('|','\\'), plik,sep = '')
        else:
            print('|',justowanie, plik,sep = '')
        if os.path.isdir(os.path.join(item,plik)):
            justowanie += '|'
            pomocnik(slownik, os.path.join(item,plik), justowanie)

def main(directory):
    slownik = {roots:dirs + files for (roots, dirs, files) in os.walk(directory)}

    for i in slownik.keys():
        slownik[i] = sorted(slownik[i])

    myslniki ='|'+'-'*(len(directory)-1)
    myslniki2 ='\\'+'-'*(len(directory)-1)

    print(directory)
    rzecz = slownik[directory]
    for item in range(len(rzecz)):
        if item == len(rzecz) -1 and os.path.isfile(os.path.join(directory, rzecz[item])):
            print(myslniki2, rzecz[item], sep='')    
        else:
            print(myslniki, rzecz[item], sep='')
        sciezka = os.path.join(directory, rzecz[item])
        if os.path.isdir(sciezka):
            pomocnik(slownik, sciezka, myslniki)

if __name__ == '__main__':
    import sys
    main('./')
