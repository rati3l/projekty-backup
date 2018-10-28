from socket import socket

class koniec(Exception):
    pass

class polaczenie(socket):
    def  __init__(self,ip='localhost',port=1234):
        super().__init__()
        self.sock = socket()
        self.sock.setblocking(0)
        self.ip = ip
        self.port = 12345
        self.polacz()
        
    def polacz(self):
        try:
            self.sock.bind((self.ip, self.port))
            self.sock.listen(5)
        except OSError:
            print('Serwer jest już uruchomiony, przełączam w tryb klienta.')
            #TODO przelaczanie w tryb klienta
    def odbieraj(self):
        while True:
            try:
                self.pol, self.info = self.sock.accept()
                self.nawiazano = True
            except BlockingIOError:
                self.nawiazano = False
            
            while self.nawiazano:
            
                self.tekst = self.pol.recv(1024).decode('utf-8')
                if self.tekst == 'q':
                    break
                    #podniesc wyjatek
                else:
                    if self.tekst:
                        print(self.tekst)
                self.wyslij = input('->')
                # break
    def wysylaj(self):
        


asdf = polaczenie()
asdf.odbieraj()