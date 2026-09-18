print("Give me the distance and speed of 2 vehicles and i will give you the time (in minutes) till they met.")

velkmh1 = float(input("Give me the speed of the first vehicle:\n"))
velkmh2 = float(input("Give me the speed of the second vehicle:\n"))

vfast = velkmh2
vslow = velkmh1

distkm = float(input("Give me the distance between these two vehicles:\n"))
totaltime = 0.0

if velkmh1 > velkmh2:
    vfast = velkmh1
    vslow = velkmh2
else:
    vfast = velkmh2
    vslow = velkmh1

totaltime = ((distkm/(vfast - vslow)) * 60) # time, in hours, to minutes

print("Total time to met eachother: " + str(totaltime))