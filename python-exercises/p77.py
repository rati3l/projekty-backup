def linegen(filename):
    for line in open(filename):
            yield line

def ile(filename, length):
    return (f for f in linegen(filename) if len(f) > length)

def print2(filename, length):
    for f in ile(filename, length):
        print(f'{len(f)}: {f}')


print2('geturl.py',40)