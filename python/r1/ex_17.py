extime_h = int(input("Enter departure hour: "))
extime_m = int(input("Enter departure minute: "))
extime_s = int(input("Enter departure second: "))

seconds_to_arrive = int(input("Give me how much seconds will the cyclist take to reach the second city: "))


artime_s = extime_s + seconds_to_arrive
artime_m = extime_m
artime_h = extime_h

arrive_days = 0  # days gone by

while artime_s >= 60:
    artime_s -= 60
    artime_m += 1

while artime_m >= 60:
    artime_m -= 60
    artime_h += 1

while artime_h >= 24:
    artime_h -= 24
    arrive_days += 1

print("Arrival time: " + str(artime_h) + ":" + str(artime_m) + ":" + str(artime_s) + " (+" + str(arrive_days) + " days)")