print("Give me a pair of catheti and I will give you the hypotenuse")

c1 = float(input("Gimme the length of the first catheti"))
c2 = float(input("Gimme the length of the second catheti"))

hptn = (((c1 ** 2) + (c2 **2)) ** (1/2))

print("The hypotenuse is: " + hptn)