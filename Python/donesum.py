# donesum.py
total = 0
n = raw_input('Enter you: ')
while n != 'done':
    total += int(n)
    n = raw_input('Enter you: ')

print total
