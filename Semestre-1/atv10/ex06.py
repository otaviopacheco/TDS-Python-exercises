ct= 0 
num1 = float(input("Insira o numero: "))
num2 = float(input("Insira o numero dnv: "))
while num2 == 0:
    num2 = float(input("Insira um numero valido diferente de 0"))
div = num1 / num2
print("A divisão é:", div)