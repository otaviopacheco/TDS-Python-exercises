n1 = int(input("Insira a nota um"))
n2 = int(input("Insira a nota dois"))
n3 = int(input("Insira a nota tres"))
m = (n1+n2+n3)/3
if m >= 6:
    print("aprovado")
elif m >= 4:
    print("exame") 
else:
    print("reprovado")