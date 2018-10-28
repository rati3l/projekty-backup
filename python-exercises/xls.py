import tablib
import sys



def main(csv, xls):

        data = tablib.Dataset().load(open('csv.csv').read())

        with open(xls,'wb') as plik:
            plik.write(data.export('xls'))


if __name__ == "__main__":
        main(sys.argv[1], sys.argv[2])