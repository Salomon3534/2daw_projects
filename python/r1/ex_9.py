print("Give me how much is your cart and I will give you the amount you need to pay once with the 15% discount applied")

total = float(input("Give me the total:\n"))

DISCOUNT = 0.15

discounted = total - total * DISCOUNT

print("The total is: " + str(discounted) + "¤") # <--- Este es el simbolo de "moneda" en general

