security_margin_x = 55
security_margin_y = 60

width = 825
depth = 10
excess = 2

saw_diameter = 232
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