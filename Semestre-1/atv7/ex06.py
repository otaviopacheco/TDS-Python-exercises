timeUm = str(input("Insira o nome do primeiro time: "))
timeDois = str(input("Insira o nome do segundo time: "))
golsTimeUm = float(input("insira a quantidade de gols do primeiro time: "))
golsTimeDois = float(input("insira a quantidade de gols do segundo time: "))
if golsTimeUm > golsTimeDois:
    print(timeUm, " ganhou", golsTimeUm, "gols")
elif golsTimeDois > golsTimeUm :
    print(timeDois, " ganhou", golsTimeDois, "gols")
else :
    print("Empate")