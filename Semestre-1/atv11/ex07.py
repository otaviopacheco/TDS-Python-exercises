i = 0 
op = float(input("Insira o numero: "))
menor = op 
while True:
    i = i + 1
    op = float(input("Insira o numero: "))
    if menor > op: 
        menor = op
    if i == 10:
        print(menor)
        break