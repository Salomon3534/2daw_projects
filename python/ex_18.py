print("Give me your first and surname and I will give you your initials")

name = str(input("Your name:\n")).capitalize()
surname = str(input("Your surname:\n")).capitalize()

print("Your initial are: " + str(name[0]) + "." + str(surname[0]))