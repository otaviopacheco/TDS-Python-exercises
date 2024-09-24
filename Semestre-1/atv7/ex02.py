import math 
num = float(input("insira o numero que vc deseja ver a raiz: "))
if num > 0  or num  == 0:
    raiz = math.sqrt(num)
    print("a raiz é ",raiz)
else:
    print("não é possivel calcular a raiz negativa")