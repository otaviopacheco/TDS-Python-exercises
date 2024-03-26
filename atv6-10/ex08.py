combus = str(input("Insira o tipo de combustivel: "))
qnt = float(input("Insira a qauntidade desejada em litros: ")) 
preco = float(0)

total = float(0) 
if combus == "g" or combus== "G" or combus == "gas" or combus == "Gas" or combus== "GAS" or combus == "gaso" or combus == "Gaso" or combus == "GASO" or combus == "gasolina" or combus == "Gasolina" or combus == "GASOLINA" :
    preco = 5.90
    print("Combustivel Gasolina valor: ", preco)
    total = qnt * preco
    print("Valor total", total)
if combus == "a" or combus == "A" or combus== "alc" or combus == "Alc" or combus == "ALC" or combus == "alcool" or combus == "Alcool" or combus == "ALCOOL" :
# or combus == "" :
    preco = 6.90
    print("Combustivel Alcool valor: ", preco)
    total = qnt * preco
    print("Valor total", total)
else : 
    print("Combustivel Invalido")