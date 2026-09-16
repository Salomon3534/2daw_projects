print("Give me a amount of minutes and I will transform it to hours and minutes")

mins = int(input("Give me the minutes amount:\n"))

hours = int(mins/60)
mins -= hours * 60

print("The total is: " + str(hours) + " hours and " + str(mins) + " minutes")