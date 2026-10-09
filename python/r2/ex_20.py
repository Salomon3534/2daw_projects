
data = {
    "america del norte": 24,
    "america central": 20,
    "america del sur": 21,
    "europa": 10,
    "asia": 18
}

try:
    wheigth = int(input("Weight of the packet (in Kg):\n"))

    if wheigth > 0:
        zones = data.keys()

        i = 1
        for zone in zones:
            print("(" + str(i) + ") " + str(zone))
            i += 1

        wanted_zone = int(input("Wanted zone:\n"))

        if wanted_zone <= 5 and wanted_zone >= 1:
            cost = wheigth * data[list(data.keys())[wanted_zone - 1]]

            print("Total cost: " + str(cost) + " €")
        else:
            print("Invalid zone!")

    else:
        print("Weight must be greater than 0!")

except ValueError:
    print("Please enter a valid number!")