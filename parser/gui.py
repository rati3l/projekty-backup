from tkinter import *


# root = tk.Tk()

# w = tk.Label(root, text = "asdasdfasdff")
# w.pack()

# root.mainloop()

class root(Tk):
    
    ramka = Frame(master=None, height = 5)
    w = Label(ramka, text = "klasasasasa")
        
    def dzialaj(self):
        self.mainloop()

okienko = root()
okienko.dzialaj()