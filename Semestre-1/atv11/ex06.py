num1 = float(input("Insira o primeiro numero: "))
num2 = float(input("Insira o segundo numero: "))
if num2 == 0:
    while True:
        num2 = float(input("Insira novamente o segundo numero: "))
        if num2 != 0:
            div= num1/num2
            print(div)
            break