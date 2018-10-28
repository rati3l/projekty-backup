class Point3d:
    def __init__(self, x,y,z):
        self.x,self.y,self.z = x,y,z
    def __repr__(self):
        return(f'{self.x}, {self.y}, {self.z}')


class Point4d:
    def __init__(self, x,y,z,w):
        super(Point3d, Point4d).__init__(self,x,y,z)
        self.w = w

    def __repr__(self):
        return(f'{self.x}, {self.y}, {self.z}, {self.w}')

xyz = Point3d(10,11,12)
xyzw = Point4d(13,14,15,17)
print(xyz)
print(xyzw)