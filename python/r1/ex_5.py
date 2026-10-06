# fahrenheit a celsius
print("Give me a temperature in ℉ and i will transform it to ℃")

deg_f = float(input("Give me the temperature in ℉:\n"))

deg_c = (deg_f - 32) * (5/9)

print("That temperature in celsius (℃) is: " + str(deg_c) + "℃")

# soy consciente de que los ℉ y ℃ no se ven bien en consola