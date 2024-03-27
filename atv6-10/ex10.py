velocidadePermitida = int(input("insira a velocidade permitida na via: "))
velocidadeAlcancada = int(input("insira a velocidade alcancada na via: "))
velocidadeAplicada = velocidadePermitida * (20/100)
if velocidadePermitida < velocidadeAlcancada+velocidadeAplicada:
    print("Multa grave")
    print(velocidadeAlcancada+velocidadeAplicada)
else:
    print(velocidadeAlcancada+velocidadeAplicada)
    print("Sem Multa")
    