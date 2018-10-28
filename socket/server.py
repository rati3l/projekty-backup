import socket
import os
from threading import Thread


def przetwarzaj_komende(tekst):
    if tekst == 'ls':
        katalogi = ['/'+x for x in filter(lambda x: os.path.isdir(x), os.listdir())]
        pliki = [x for x in filter(lambda x: os.path.isfile(x),os.listdir())]
        return '\n'.join(katalogi + pliki)
    else:
        return tekst

def przyjmuj_polaczenia():
    down = socket.socket()
    up = socket.socket()
    port_down = 1234 
    port_up = 1235
    down.bind(('localhost', port_down))
    up.bind(('localhost', port_up))
    down.listen(10)
    up.listen(10)
    
    while True:

        conn, info = down.accept()
        conn2, info = up.accept()
        i = 0
        while True:
            i += 1
            print(str(i),'czekam')
            tekst = conn.recv(1024).decode('utf-8')
            if not tekst:
                break
            print(str(i),'odebralem')
            conn2.send(przetwarzaj_komende(tekst).encode('utf-8'))
            print(str(i),'odeslalem\n')

    conn.close()
t = Thread(target=przyjmuj_polaczenia)

t.start()
