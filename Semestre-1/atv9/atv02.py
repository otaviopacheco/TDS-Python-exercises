mes = int(input("Digite um número referente a um mês do ano: "))
match mes:
    case 1:
        print("Férias")
    case mes if mes in range(2, 7):  
        print("1º semestre letivo")
    case 7:
        print("Recesso")
    case mes if mes in range(8, 12):  
        print("2º semestre letivo")
    case 12:
        print("Férias") 
