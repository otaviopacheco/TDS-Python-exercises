num1 = int(input("Insira o primeiro numero: "))
num2 = int(input("Insira o segundo: "))
if num1 > num2:
    print("o numero {} é maior que o numero {}".format(num1, num2))
elif num1 < num2:
    print("o numero {} é menor que o numero {}".format(num1, num2))
else: 
    print("os numeros são iguais")