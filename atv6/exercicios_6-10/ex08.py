salario = float(input("Insira o salario base: "))
salarioRe = salario * (15 / 100)
# print("O valor do reajuste é de: ",salarioRe)
Impostos = (salario+salarioRe) * (8/100)
salario = salarioRe + salario - Impostos
# print("O valor do imposto é de: ",Impostos)
print(salario)


