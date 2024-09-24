# 3) Escreva um algoritmo que leia dois números e efetue a subtração. Caso o valor 
# subtraído seja maior que zero, este deverá ser apresentado somando-se a ele mais 
# 1; caso o valor subtraído seja menor que zero, este deverá ser apresentado 
# somando-se 1 e caso o valor seja igual a zero, este deverá ser apresentado 
# somando-se 2.

num1 = int(input("Digite um número: "))
num2 = int(input("Digite outro número: "))
sub = num1 - num2
if sub > 0:
    print(sub + 1)
elif sub < 0:
    print(sub + 1)
else:
    print(sub + 2)