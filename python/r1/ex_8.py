print("Give me your base salary and the price of the 3 sale you made this month and I will give you how much did you earn via comisssions and the total you will earn this month")

COMISSION_BONUS = 0.1

sales = [0.0, 0.0, 0.0]
base_salary = float(input("Give me your base salary:\n"))

for i in range(len(sales)):
    sales[i -1] = float(input("Give me the price of one of the sales:\n"))


comissions = 0.0
for i in range(len(sales)):
    comissions += sales[i -1] * COMISSION_BONUS

total = comissions + base_salary

print("Comissions: " + str(comissions) + "#euros")
print("Total: " + str(total) + "#euros")