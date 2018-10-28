import os
import timeit


setup1 = '''
import os
root = '/home/ratiel/'
def yieldfile(root):
    for roots,dirs, files in os.walk(root):
        yield roots, files

def sciezki(root):
    return (os.path.join(x,y) for x,z in yieldfile(root) for y in z)

def print2(root):
    for item in sciezki(root):
        # print(item)
        pass

'''
setup2 = '''
import os
root = '/home/ratiel/'
def listd(sciezka):
    counter = 0
    for item, item2, item3 in os.walk(sciezka):
        for item4 in item3:
            # print(os.path.join(item, item4))
            pass
        
'''



print (min(timeit.Timer('print2(root)', setup=setup1).repeat(7, 10)))
print (min(timeit.Timer('listd(root)', setup=setup2).repeat(7, 10)))