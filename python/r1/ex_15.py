print("You will give me 2 numeric variables and i will swap them")

v1 = int(input("Give me the first variable:\n"))
v2 = int(input("Give me the second variable:\n"))

swap = v2
v2 = v1
v1 = swap

print(v1, v2)
