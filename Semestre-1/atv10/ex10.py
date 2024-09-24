soma = 1 
ct = 0
while ct<2: 
    catetoA = float(input("Insira o numero"))
    catetoB = float(input("Insira o numero"))
    ct+=1
    if catetoA!=0 and catetoA >=0 and catetoB!=0 and catetoB >=0:
        hipotenusa = (catetoA**2 + catetoB**2)
        hipotenusa = (hipotenusa**2)
        print("A hipotenusa é", hipotenusa)
    elif catetoA <= 0 and catetoB <= 0:
        print("invalido")
        