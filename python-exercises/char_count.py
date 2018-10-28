def slownikuj(slowa):
    slownik = {}
    for slowo in slowa:
        slownik[slowo] = slownik.get(slowo,0)+1 
    return slownik


def main(filename):
    with open(filename,'r') as p:
        lorem = [i.split() for i in p.readlines()]
        lorem = list(filter(lambda x: x!= [], [litera for 
        wiersz in lorem for slowo in wiersz for litera in slowo]))


    slownik = slownikuj(lorem)

    a = sorted([[slownik[i], i] for i in slownik], reverse=True)
    print(a)

if __name__ == "__main__":
    import sys
    main(sys.argv[1])