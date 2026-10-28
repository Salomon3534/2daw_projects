
from exceptions.exception_calories import ExceptionCalories


class Food:

    def __init__(self, n, p, c, f):
        mes_error = "Los macronutrientes no pueden ser negativos"

        if p < 0:
            raise ExceptionCalories(mes_error, p)

        if c < 0:
            raise ExceptionCalories(mes_error, c)

        if f < 0:
            raise ExceptionCalories(mes_error, f)

        self.name = n
        self.proteins = p
        self.carbs = c
        self.fats = f

    def calculate_calories(self):
        cals = (self.proteins + self.carbs) * 4 + self.fats * 9
        return cals
