import tablib


csv = './csv'

with open(csv, 'r') as plik:
    for line in iter(plik.readline()):
        print(line)

