code= int(input("Digite o código do produto: "))
match code:
    case 1:
        print("Alimento não perecível")
    case code if code in range(2, 5):
        print("Alimento perecível")
    case code if code in range(5, 7):
        print("Vestuário")
    case 7:
        print("Higiene pessoal")    
    case code if code in range(8, 16):
        print("Limpeza e utensílios domésticos")
    case _:
        print("Código inválido, Digite novamente.") 