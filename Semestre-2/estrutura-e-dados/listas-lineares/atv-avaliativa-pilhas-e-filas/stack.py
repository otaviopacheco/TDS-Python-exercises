stackCars = []
for i in range(1):
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
    if stackCars[i]["propoulsao"] == "eletrico":
        stackEletricCars = []
        stackEletricCars.append(stackCars[i])  
        print ("deu")
# print (stackCars)

# print(cars)


