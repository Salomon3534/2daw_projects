security_margin_x = 50
security_margin_y = 110

width = int(input("Give me the doors width:\n"))
depth = int(input("Give me the desired depth:\n"))
excess = int(input("Give me the desired excess:\n"))

saw_diameter = 300
saw_radii = saw_diameter/2

saw_margin_x = ((saw_radii**2) - (saw_radii-depth)**2)**(1/2)

p1 = (-security_margin_x - saw_radii, -security_margin_y - saw_radii)
p2 = (p1[0], depth - saw_radii)
p3 = (width - excess - saw_margin_x, depth - saw_radii)
p4 = (p3[0], - security_margin_y - saw_radii)

print(p1)
print(p2)
print(p3)
print(p4)