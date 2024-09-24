s = 0
ct = 0
idade = int(input("insira a sua idade"))
while idade !=0:
    s += idade
    ct += 1
    idade= int(input("insira a sua idade(0 para finalizar):"))
m2=s//ct
print("a media de idade é:",m2)
