import curses
from character import Postac

class Mapa:

    def __init__(self, okno_mapy, postac):
        self.okno_mapy = okno_mapy
        self.postac = postac

    def rysuj(self):
        self.okno_mapy.clear()
        self.okno_mapy.box()
        self.okno_mapy.addch(*self.postac.yx, '@')