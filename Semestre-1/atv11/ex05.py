num = 0
i = 0
acc = 0
while True: 
    num = float(input("Insira um numero"))
    i = i + 1
    acc = num + acc 
    if i == 3: 
        num = (acc/i)
        print(num)
        break