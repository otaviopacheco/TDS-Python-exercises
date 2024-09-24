i = 0 
hipotenusa = 0
catetoA = float(input("Insira o valor do cateto A: "))
catetoB = float(input("Insira o valor do cateto B: "))
while True:
    i = i + 1
    while catetoA <= 0 or catetoB <= 0:    
        if catetoA <= 0 :
            catetoA = float(input("Insira o novamente o cateto A"))
        elif catetoB <= 0 :
            catetoB = float(input("Insira o novamente o cateto B")) 
    hipotenusa = (catetoA**2 + catetoB**2)
    hipotenusa = (hipotenusa**2)
    print(hipotenusa)
    catetoA = float(input("Insira o valor do cateto A: "))
    catetoB = float(input("Insira o valor do cateto B: "))
    if i == 3:
        break