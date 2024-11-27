list = []
countN = 0
countP = 0
media = 0
menorNum = 0
maiorNum = 0
maiorNum = 0
menorNum = 0

for i in range(2):
    menorNum = i
    number = float(input("insira um numero: "))
    media = i + media

    if number < 0:
        countN = countN + 1
    else:
        countP = countP + 1

    if number < menorNum:
        menorNum = number

    if number > maiorNum: 
        maiorNum = number

print(media)
print(countN)
print(countP)

print(maiorNum)
print(menorNum)
