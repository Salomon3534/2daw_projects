print("Give me a number of 2 digits and i will give you the inverted one")

num = int(input("Give me the number:\n"))

if not num > 100:
    digit_1 = int(num/10)
    digit_2 = num - digit_1 * 10

    inverted = digit_2 * 10 + digit_1

    print("The inverted number is: " + str(inverted))
else:
    print("ERROR: You gave me a number of more than 2 digits")