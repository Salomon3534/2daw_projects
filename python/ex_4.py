print("Give me a pair of numbers and I will show you the sum, rest, multiplication and division between them")

n1 = int(input("Give me the first number\n"))
n2 = int(input("Give me the second number\n"))

print("Sum: " + str(n1+n2))

print("Rest (dedducting from first number): " + str(n1-n2))
print("Rest (dedducting from second number): " + str(n2-n1))

print("Multiplication: " + str(n1*n2))

print("Division (dividing the first by the second): " + str(n1/n2))
print("Division (dividing the second by the first): " + str(n2/n1))

# PABLO aqui he pensado que la resta y la multiplicacion no daria lo mismo si se dividiera el primero con el segundo que el segundo con el primero.
# Por lo que he implementado las 2 posibilidades a la hora de restar y multiplicar