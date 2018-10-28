# Ack_tab = {}
# def Ack(m, n):
#    if (m, n) in Ack_tab:
#       return Ack_tab[(m, n)]
#    else:
#      if m==0: r = n + 1
#      if m>0 and n==0: r = Ack(m-1, 1)
#      if m>0 and n>0: r = Ack(m-1, Ack(m, n-1))
#      Ack_tab[(m, n)] = r
#      return r

# for i in range (5):
#     for j in range(5):
#         print(i, j, Ack(j,i))


with open('client.py', 'r') as f:
    print(f.readline())


# import random
# import string
# import os



# try:
#     print (1+'sadf')
# except TypeError:
#     print('asdf')
# else:
#     print('fdsa')
# finally:
#     print('to chyba zawsze będzie')

# # with open('test.txt', 'r') as f:
# #     l = f.read(4096)
# #     print(l)




# def generator_pliku(rozmiar, nazwa):
#     litery = string.ascii_lowercase

#     with open(nazwa, 'w') as f:
#         while int(os.path.getsize(nazwa)/1024/1024) < rozmiar:
#             slowo = ''.join([x for i in range(random.randint(1,15)) for x in random.choice(litery)])+' '
#             f.write(slowo)


# # generator_pliku(100, 'pliktestowy')

# # with open ('delme','r') as g:
# #     print(g.read(1024))