c_1 = int(input("How many 1 cent coins do you have:\n"))
c_2 = int(input("How many 2 cent coins do you have:\n"))
c_5 = int(input("How many 5 cent coins do you have:\n"))
c_10 = int(input("How many 10 cent coins do you have:\n"))
c_20 = int(input("How many 20 cent coins do you have:\n"))
c_50 = int(input("How many 50 cent coins do you have:\n"))
e_1 = int(input("How many 1 euro coins do you have:\n"))
e_2 = int(input("How many 2 euro coins do you have:\n"))

money = float(c_1 * 0.01 +
              c_2 * 0.02 +
              c_5 * 0.05 +
              c_10 * 0.1 +
              c_20 * 0.2 +
              c_50 * 0.5 +
              e_1 * 1 + 
              e_2 * 2)

print("You have a total of " + str(int(money)) + "€ and " + str(round((money - int(money)) * 100)) + " cents")
