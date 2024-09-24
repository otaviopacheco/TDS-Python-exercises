valorCom = float(input("Insira o valor da compra: "))
prest = int(input("Insira a quantidade de prestações; MAX = 5"))
valorPrestTotal = valorCom / prest
valorDesc = valorCom - (valorCom * (20/100))
# valorDesc = valorCom - valorDesc
print("p valor total da compra é: ", valorCom, "o valor da prestação é ", valorPrestTotal, "x",prest, " e o valor avista é: ",valorDesc)