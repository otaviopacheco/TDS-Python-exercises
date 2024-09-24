op = float(input("insira o numero"))
maior = op 
i = 0
while True:
    op = float(input("insira o numero")) 
    i = i + 1
    if maior< op: 
        maior = op
    if i == 9:
        print(maior)
        break