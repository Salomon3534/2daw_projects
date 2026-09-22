security_margin_x = int(input("Give me the x security margin:\n"))
security_margin_y = int(input("Give me the y security margin:\n"))

width = int(input("Give me the doors width:\n"))
depth = int(input("Give me the desired depth:\n"))
excess = int(input("Give me the desired excess:\n"))

saw_radii = int(input("Give me the saw's radii:\n"))

p1 = (-security_margin_x - saw_radii, -security_margin_y - saw_radii)
p2 = (-security_margin_x - saw_radii, depth - saw_radii)
p3 = (width - excess - saw_radii, depth - saw_radii)
p4 = (width - excess - saw_radii, - security_margin_y - saw_radii)

print(p1)
print(p2)
print(p3)
print(p4)