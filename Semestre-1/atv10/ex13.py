ct = 0
media = 0
peso = float(input("insira o peso da pessoa: "))
media = peso 
maiorPeso = peso
while peso != 0:
    ct = ct + 1
    peso= float(input("insira o peso da pessoa: "))
    if peso <= 60 and peso > maiorPeso:
        maiorPeso = peso
    if peso > 60:
        media = media + peso
print(media/ct)
print(maiorPeso)                   