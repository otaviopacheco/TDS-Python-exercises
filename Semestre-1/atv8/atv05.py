typeOneQnt = int(input("Insira a quantidade vendida do picole 1:"))
typeTwoQnt = int(input("Insira a quantidade vendida do picole 2:"))
typeThreeQnt = int(input("Insira a quantidade vendida do picole 3: "))
total = typeOneQnt+typeTwoQnt+typeThreeQnt
valueTyOne = typeOneQnt*2.50
valueTyTwo = typeTwoQnt*2.60
valueTyThree = typeThreeQnt*2.75
totalValue = valueTyOne+valueTyTwo+valueTyThree
print("O total de picoles vendidos foi {} com um valor arrecadado de {}. Sendo R${} do tipo um,  R${} do tipo 2, e R${} do tipo 3".format(total, totalValue, valueTyOne, valueTyTwo, valueTyThree))