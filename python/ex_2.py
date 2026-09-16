r_base: float
r_heigth: float

print("you have a rectangle")

print("give me the base: \n")
r_base = float(input())

print("give me the heigth: \n")
r_heigth = float(input())

r_area: float = (r_base * r_heigth)
r_perimeter: float = (2* r_base + 2* r_heigth)

print("the perimeter is: " + str(r_perimeter))
print("the area is: " + str(r_area))
