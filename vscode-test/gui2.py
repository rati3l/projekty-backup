from tkinter import *
from tkinter import ttk

def znajdz_wpis():
    array = []
    for idx, stopnie in enumerate(pola):
            array.append([idx, stopnie.get()])
    print (array)
    return array

def przelicz(*args):

    array = znajdz_wpis()

    try:
        cels = float(array[0][1])
        kelvin.set(round(cels-273.15, 2))
        fahrenheit.set(round(cels*1.8+32, 2))
    except ValueError:
        pass
    
    try:
        kelv = float(array[1][1])
        celsjusz.set(round(kelv+273.15,2))
        fahrenheit.set(round((kelv+237.15-32)/1.8))
    except ValueError:
        pass



def wyczysc():
    kelvin.set("")
    celsjusz.set("")
    fahrenheit.set("")

root = Tk()



celsjusz = StringVar()
kelvin = StringVar()
fahrenheit = StringVar()

pola = [celsjusz, kelvin, fahrenheit]

root.title("Temperatury")

ramka = ttk.Frame(root, padding="3 3 12 12")
ramka.grid(column=0, row=0, sticky=(N, W, E, S))
ramka.columnconfigure(0, weight=1)
ramka.rowconfigure(0, weight=1)



celsjusz_entry = ttk.Entry(ramka, width = 7, textvariable = celsjusz)
celsjusz_entry.grid(column=1, row=2, sticky= (W, E))
ttk.Label(ramka, text = "Celsjusz").grid(column=1, row=1, sticky= (W, E))

kelvin_entry = ttk.Entry(ramka, width = 7, textvariable = kelvin)
kelvin_entry.grid(column=2, row=2, sticky= (W, E))
ttk.Label(ramka, text = "Kelvin").grid(column=2, row=1, sticky= (W, E))

fahrenheit_entry = ttk.Entry(ramka, width = 7, textvariable = fahrenheit)
fahrenheit_entry.grid(column=3, row=2, sticky= (W, E))
ttk.Label(ramka, text = "Fahrenheit").grid(column=3, row=1, sticky= (W, E))

ttk.Button(ramka, text="Oblicz", command=przelicz).grid(column=3, row=3, sticky=W)
ttk.Button(ramka, text="Wyczyśc", command=wyczysc).grid(column=2, row=3, sticky=W)


for child in ramka.winfo_children(): child.grid_configure(padx=5, pady=5)

# root.bind('<Return>', przelicz)


root.mainloop()