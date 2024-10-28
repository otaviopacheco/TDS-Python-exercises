stackCars = []
stackEletricCars = []
stackGasolineCars = []
stackMax = 10
while True:
    nomeDoCarro = input(str("Insira o nome do carro: "))
    marcaDoCarro = input(str("Insira o marca do carro: "))
    propulsao = input(str("é eletrico ou a gasolina?: "))
    propulsao = propulsao.lower()
    cars = {
        "nome": nomeDoCarro,
        "marca":marcaDoCarro,
        "propoulsao":propulsao
    }
    if len(stackCars) == stackMax:
        print("Stack cheio!")
        break
    stackCars.append(cars)
for i in range(stackMax):
    if stackCars[i]["propoulsao"] == "eletrico":
        stackEletricCars.append(stackCars[i])  
    elif stackCars[i]["propoulsao"] == "gasolina":
        stackGasolineCars.append(stackCars[i])
print (stackEletricCars, stackGasolineCars)



