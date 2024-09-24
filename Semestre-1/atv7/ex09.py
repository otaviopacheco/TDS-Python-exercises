macaQtd = float(input("insira a quantidade  maças: "))
macaPreco = 3.00
macaPrecoTotal = 0
if macaQtd <=12:
    macaPrecoTotal = macaPreco * macaQtd
    macaPrecoTotal = round(macaPrecoTotal, 2)
    print(macaPrecoTotal)
elif macaQtd >= 12:
    desc = macaPreco * ( 16.6/100 )
    macaPreco =  macaPreco- desc
    macaPreco = round(macaPreco, 3)
    macaPrecoTotal = macaPreco * macaQtd
    macaPrecoTotal = round(macaPrecoTotal, 2) 
    print(macaPrecoTotal)