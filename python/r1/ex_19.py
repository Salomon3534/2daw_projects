print("I will calculate your total mark in the test, but for that I need you to give me the amount of the ones you got rigth, the ones that you didn't and the ones you left blank")

correct = int(input("How many correct ones you got:\n"))
incorrect = int(input("How many incorrect ones did you get:\n"))
blank = int(input("How many questions did you not answer:\n")) # para que en blanco??? si no sirve

PENALIZATION = -1
BONIFICATION = 5
BLANK = 0

mark = correct * BONIFICATION + incorrect * PENALIZATION + blank * BLANK

print("You got " + str(mark) + " points in the test")
