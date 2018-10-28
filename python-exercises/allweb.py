from random import randint

x = ('.'.join(map(lambda x: str(x), [a,b, c, d]))+'\n' for a in range(255) for b in range(255) for c in range (255) for d in range(255))

j = 1
for i in x:
    print(j,': ', i, sep='')
    j+=1
    with open('adresy', 'a') as p:

        p.write(i)