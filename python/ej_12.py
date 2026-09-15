print("I will ask you to gimme 2 coordinates and i will give you the distance between these 2 points")

coord_a = (float(input("Coordinate A x:\n")), float(input("Coordinate A y:\n")))
coord_b = (float(input("Coordinate B x:\n")), float(input("Coordinate B y:\n")))

vector_ab = (coord_b[0] - coord_a[0], coord_b[1] - coord_a[1])
module = ((vector_ab[0] ** 2) + (vector_ab[1] ** 2)) ** 0.5

print("The total distance is: " + str(module))