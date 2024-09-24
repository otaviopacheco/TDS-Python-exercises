
age=int(input("Digite o numero equivalente à sua idade: "))
match age:
    case age if age in range(5, 8):
        print("Categoria Infantil A")
    case age  if age in range(8, 10):
        print("Categoria Infantil B")
    case age if age in range(10, 14):
        print("Categoria Juvenil A")
    case age if age in range(14, 18):
        print("Categoria Juvenil B")
    case age if age == 18:
        print("Categoria Adulta")
    case _:
        print("Idade inválida, digite novamente.")   