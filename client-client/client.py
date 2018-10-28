import socket



pol = socket.socket()
pol.connect(('localhost', 12345))

while True:

    tekst = input('->')
    pol.send(tekst.encode('utf-8'))
    # pol.shutdown(socket.SHUT_RDWR)
    # pol.close()
