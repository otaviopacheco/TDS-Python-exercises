stackCars = []
stackEletricCars = []
stackGasolineCars = []

stackMax = 2

while True:
    stackLen = len(stackCars)+1
    nomeDoCarro = input(str("Insira o nome do carro: "))
    marcaDoCarro = input(str("Insira o marca do carro: "))
    propulsao = input(str("é eletrico ou a gasolina?: "))
    propulsao = propulsao.lower()

    cars = {
        "nome": nomeDoCarro,
        "marca":marcaDoCarro,
        "propoulsao":propulsao
    }


    
    stackCars.append(cars)
    if stackLen >= stackMax:
        print("Stack cheio!")
        break

maxStackLen = len(stackCars) - 1
for i in range(maxStackLen, -1, -1):
    if stackCars[i]["propoulsao"] == "eletrico":
        stackEletricCars.append(stackCars[i])  
    elif stackCars[i]["propoulsao"] == "gasolina":
        stackGasolineCars.append(stackCars[i])
print("carros a gasolina: ", stackGasolineCars )
print("carros eletricos: ", stackEletricCars)







