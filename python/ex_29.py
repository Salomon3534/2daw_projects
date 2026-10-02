numbers = [3.0, -5.0, 888.0, 35436825, 263473, 345, 35,776, 346, 3455, 333, 332, 331, -736475, -1, 0, 5]

iterated_numbers = []

while len(numbers) != len(iterated_numbers):
    highest = -float("inf")
    for n in numbers:
        if (n > highest) and (n not in iterated_numbers):
            highest = n
            print(highest)
    
    iterated_numbers.append(highest)

print(iterated_numbers)