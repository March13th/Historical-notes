import sys
def collatz(number):
    if (number%2==0):
        print(str(number//2))
        return number//2
    elif (number%2==1):
        print(str(3*number+1))
        return 3*number+1
while True:
    try:
        num=int(input('imput a number pleease:'))
        break
    except ValueError:
        print('u should input a integer')
        continue
while True:
    bak = collatz(num)
    if bak == 1:
        break
    else:
        num=collatz(bak)



