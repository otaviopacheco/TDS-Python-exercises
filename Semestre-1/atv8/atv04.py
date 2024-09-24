# 4) Faça um algoritmo que leia os valores A, B e C. Mostre uma mensagem que informe 
# se a soma de A com B é menor, maior ou igual a C.

A = int(input("insira o primeiro numero: "))
B = int(input("insira o segundo numero: "))
C = int(input("insira o terceiro numero: "))
if A + B > C: 
    print("A soma de A com B é maior que C.")
else: 
    print("A soma de A com B é menor ou igual a C.")