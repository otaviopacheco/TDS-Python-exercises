print("1 - camisas PP (extra pequeno)")
print("2 - camisas P (Pequeno)")
print("3 - camisas M (Medio)")
print("4 - camisas G (Grande)")
print("5 - camisas GG (Extra Grande)")
preco = float(0)
tipoDaCamisa = str()
opTamanhoCamisa = float(input("Insira a opção de camisa desejada: "))
qtdCamisa = float(input("Insira a quantidade de camisas desejada: "))
if opTamanhoCamisa != 1 and opTamanhoCamisa != 2 and opTamanhoCamisa != 3 and opTamanhoCamisa != 4 and opTamanhoCamisa != 5 :   
    print("tamanho invalido")
elif opTamanhoCamisa ==  1: 
    print("Camisa de tamanho PP")
    preco = 40.00
    preco = preco * qtdCamisa
    tipoDaCamisa = "Extra pequeno, PP"
    print("camisa do tamanho,", tipoDaCamisa,"preço total:",preco)
elif opTamanhoCamisa == 2:
    preco = 45.00
    preco = preco * qtdCamisa
    tipoDaCamisa = "Pequeno, P"
    print("camisa do tamanho,", tipoDaCamisa,"preço total:",preco)
elif opTamanhoCamisa == 3: 
    preco = 50.00
    valorDesc = preco * (25/100)
    preco = preco - valorDesc
    preco = preco * qtdCamisa
    tipoDaCamisa = "Medio, M"
    print("camisa do tamanho,", tipoDaCamisa,"preço total:",preco)
elif opTamanhoCamisa == 4: 
    preco = 55.00
    preco = preco * qtdCamisa
    tipoDaCamisa = "Grande, G"
    print("camisa do tamanho,", tipoDaCamisa,"preço total:",preco)
elif opTamanhoCamisa == 5: 
    tipoDaCamisa = "Extra Grande, GG"
    preco = 60.00 
    preco = preco * qtdCamisa
    print("camisa do tamanho,", tipoDaCamisa,"preço total:",preco)