ct = 1
valor = float(input("Insira o valor da mercadoria: "))
print("valor da mercadoria:",valor)
while ct != 0: 
    op = str(input("deseja continuar (n/s)"))
    if op == "n" or op == "N":
        break
    ct = ct + 1
    valor = float(input("Insira o valor da mercadoria: "))
    print("valor da mercadoria:",valor)
print("total de mercadorias: {}\nValor medio de: {}".format(ct, valor/ct))