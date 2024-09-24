salario = float(input("Insira o salario base: "))
salarioRe = salario * (15 / 100)
Impostos = (salario+salarioRe) * (8/100)
salario = salarioRe + salario - Impostos
print("o salario final é ",salario)

