data = {
    "america del norte": 24,
    "america central": 20,
    "america del sur": 21,
    "europa": 10,
    "asia": 18
}

wheigth = int(input("Wheigth of the packet (in Kg):\n"))

zones = data.keys()

i = 1
for zone in zones:
    print("(" + str(i) + ") " + str(zone))
    i += 1

wanted_zone = int(input("Wanted zone:\n"))

cost = wheigth * data[list(data.keys())[wanted_zone - 1]]

print("Total cost: " + str(cost) + " €")