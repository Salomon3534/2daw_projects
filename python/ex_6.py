print("Give me 3  numbers and i will give you the average")

numarray = [0.0,0.0,0.0]

for i in range(len(numarray)):
    numarray[i - 1] = float(input("Give me a number:\n"))

total = 0.0
for i in range(len(numarray)):
    total += numarray[i-1]

average = (total/len(numarray))

print("The average is: " + str(average))