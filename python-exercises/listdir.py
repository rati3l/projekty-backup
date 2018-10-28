import os


def listd(sciezka):
    counter = 0
    for item, item2, item3 in os.walk(sciezka):
        for item4 in item3:
            print(os.path.join(item, item4))
            counter += 1
    print("plikow: ", counter)


if __name__ == "__main__":
    import sys
    listd(sys.argv[1])