class reverse:
    def __init__(self, lista):
        self.lista = lista
        self.i = len(lista)-1

    def __iter__(self):
        return self
    
    def __next__(self):
        if self.i >= 0:
            i = self.i
            self.i -=1
            return self.lista[i]
        else:
            raise StopIteration()