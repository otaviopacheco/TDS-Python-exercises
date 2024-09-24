velocidadePermitida = int(input("insira a velocidade permitida na via: "))
velocidadeAlcancada = int(input("insira a velocidade alcancada na via: "))
velocidadeAplicada = velocidadePermitida * (20/100)
if velocidadeAlcancada >= velocidadePermitida+velocidadeAplicada:
    if velocidadePermitida < velocidadeAlcancada+velocidadeAplicada:
        print("Multa grave")
else:
    print("a multa seria aplicada caso vc estivesse",velocidadeAlcancada+velocidadeAplicada)
    print("Sem Multa")
    