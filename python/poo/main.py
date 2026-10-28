from classes.food import Food
from exceptions.exception_calories import ExceptionCalories

try:
    mantzana = Food("Manzana", -555, 14, 0.2)
except ExceptionCalories as e:
    print(e)

platanito = Food("Plátano", 1.1, 23, 0.3)

print(platanito.calculate_calories())