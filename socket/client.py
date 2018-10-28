from socket import socket
import socket as socket_mod
from threading import Thread
import sys
import time


class sock(socket):
    def __init__(self):
        super().__init__()
        self.up = socket()
        self.down = socket()
        self.nawiaz_pol()
            
    def nawiaz_pol(self):
        try:
            self.up.connect(('localhost', 1234))
            self.down.connect(('localhost', 1235))
        except ConnectionRefusedError:
            print('Uruchom serwer!')
            time.sleep(2)
            self.nawiaz_pol()
            # sys.exit()


    def odbierz(self):
        
        while True:
            self.odbior = self.down.recv(1024).decode('utf-8')
            print(self.odbior)

    def wyslij(self):
        time.sleep(0.01)
        self.up.send(self.zacheta().encode('utf-8'))


    def zacheta(self):
        self.tekst = input('->')
        if self.tekst == 'q':
            self.zakoncz()
        return self.tekst

    def zakoncz(self):
        self.up.shutdown(socket_mod.SHUT_RD)
        self.down.shutdown(socket_mod.SHUT_RD)
        self.up.close()
        self.down.close()
        sys.exit()


class watek(Thread):
    #TODO rano!
    pass

def Main():

    pol = sock()
    wyslij = Thread(target = pol.wyslij)
    odbierz = Thread(target = pol.odbierz)
    try:
        wyslij.start()
        odbierz.start()
    except OSError:
        print('ukrywam')
    except KeyboardInterrupt:
        wyslij._stop()
        odbierz._stop()
        pol.zakoncz()


if __name__ == '__main__':
    Main()