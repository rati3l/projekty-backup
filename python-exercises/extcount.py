import os
import os.path


def licz(sciezka):

    x = [p for p in os.listdir('./') if os.path.isfile(os.path.join('./', p))]

    rozszerzenia = {}
    for item in x:
        if '.' in item:
            item = item.split('.')[1]
            rozszerzenia[item] = rozszerzenia.get(item, 0) + 1
        else:
            rozszerzenia['brak'] = rozszerzenia.get('brak', 0) +1
    
    rozszerzenia2={}

    for item,item2 in rozszerzenia.items():
        rozszerzenia2[item2] = item
    
    rozszerzenia2 = sorted(rozszerzenia2.items(), reverse=True)
    for item in rozszerzenia2:
        print(item)

if __name__ == "__main__":

    import sys
    licz('/home/')
import os
import os.path


def licz(sciezka):

    x = [p for p in os.listdir('./') if os.path.isfile(os.path.join('./', p))]

    rozszerzenia = {}
    for item in x:
        if '.' in item:
            item = item.split('.')[1]
            rozszerzenia[item] = rozszerzenia.get(item, 0) + 1
        else:
            rozszerzenia['brak'] = rozszerzenia.get('brak', 0) +1
    
    rozszerzenia2={}

    for item,item2 in rozszerzenia.items():
        rozszerzenia2[item2] = item
    
    rozszerzenia2 = sorted(rozszerzenia2.items(), reverse=True)
    for item in rozszerzenia2:
        print(item)

if __name__ == "__main__":

    import sysimport os
import os.path


def licz(sciezka):

    x = [p for p in os.listdir('./') if os.path.isfile(os.path.join('./', p))]

    rozszerzenia = {}
    for item in x:
        if '.' in item:
            item = item.split('.')[1]
            rozszerzenia[item] = rozszerzenia.get(item, 0) + 1
        else:
            rozszerzenia['brak'] = rozszerzenia.get('brak', 0) +1
    
    rozszerzenia2={}

    for item,item2 in rozszerzenia.items():
        rozszerzenia2[item2] = item
    
    rozszerzenia2 = sorted(rozszerzenia2.items(), reverse=True)
    for item in rozszerzenia2:
        print(item)

if __name__ == "__main__":

    import sys