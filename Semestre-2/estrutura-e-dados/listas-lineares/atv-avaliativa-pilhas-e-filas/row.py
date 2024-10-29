row = []
rowEletricCars = []
rowGasolineCars = []


maxRow = 2

while True:


    rowLen = len(row)+1
    carName = str(input("Insira o nome do carro: "))
    carBrand = str(input("Insira o nome da marcado carro: "))
    propulsion = str(input("É eletrico ou a gasolina: "))
    propulsion = propulsion.lower()


    cars = {
        "name": carName,
        "brand": carBrand, 
        "propulsion": propulsion
    }

    row.append(cars)
    if rowLen >= maxRow:
        print("Fila cheia")
        break
    


for i in range(rowLen): 
    if row[i]["propulsion"] == "eletrico":
        rowEletricCars.append(row[i])
    elif row[i]["propulsion"] == "gasolina":
        rowGasolineCars.append(row[i])
print(rowEletricCars)
print(rowGasolineCars)

