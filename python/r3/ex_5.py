chars = input
vocales = ["a","e","i","o","u"]

char = "yolo"
while (char != " "):
    char = str(input("Dame un caracter:\n")).lower()

    if char != " ":
        if char in vocales:
            print("VOCAL")
        else:
            print("no vocal")