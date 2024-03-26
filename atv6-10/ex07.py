altura = float(input("Insira sua altura: "))
sexo = str(input(" insira o seu sexo: "))
peso = float(0)
if sexo == "f" or sexo == "Feminino" or sexo == "Femea" or sexo == "Mulher" or sexo == "mulher" or sexo == "F" or sexo == "femea": 
    peso = (altura * 62.1) - 44.7
elif sexo == "m" or sexo == "M" or sexo == "masculino" or sexo == "Masculino"  or sexo == "homem" or sexo == "Homem" or sexo == "macho" or sexo == "Macho" :
    peso = (altura * 72.7) - 58
    print(peso)