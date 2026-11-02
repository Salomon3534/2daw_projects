class Food:
    def __init__(self, name, prt, car, fat):
        self.name = name
        self.proteins = prt
        self.carbs = car
        self.fats = fat

    def calculate_kcals(self):
        return (((self.proteins + self.carbs) * 4) + (self.fats * 9))