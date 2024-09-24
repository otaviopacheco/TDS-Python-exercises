i = 0 
while True:
    i= i+1
    print(i)
    base = float(input("Insira a base do triangulo: "))
    altura = float(input("Insira a altura do triangulo: "))
    area = (base*altura)/2 
    print(area)
    if i == 50:
        break