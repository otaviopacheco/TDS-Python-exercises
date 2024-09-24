print("Aceitamos as formas de pagamento: ")

print("Opção 1 - Venda à vista.") 
print("Opção 2 - Venda a prazo 30 dias.")
print("Opção 3 - Venda a prazo 60 dias.") 
print("Opção 4 - Venda a prazo 90 dias.")
print("Opção 5 - Venda com cartão de débito.")
print("Opção 6 - Venda com cartão de crédito.")

valor = float(input("Insira o valor da venda: "))

metodoDePagamento= int(input("Escolha a opção (1 à 6) de pagamento desejado: "))

match metodoDePagamento: 
    case 1:
        print(f"Valor da venda: R$ {valor}")
        print(f"Desconto de 10%: R$ {valor * 0.10}")
        print(f"Valor final à vista: R$ {valor * 0.90}")
    case 2:
        print(f"Valor da venda: R$ {valor}")
        print(f"Desconto de 5%: R$ {valor * 0.05}")
        print(f"Valor final a prazo 30 dias: R$ {valor * 0.05}")
    case 3:
        print(f"Valor da venda: R$ {valor}")
        print(f"Valor final a prazo 60 dias: R$ {valor}")
    case 4:
        print(f"Valor da venda: R$ {valor}")
        print(f"Acréscimo de 5%: R$ {valor * 1.05}")
        print(f"Valor final a prazo 90 dias: R$ {valor * 1.05}")
    case 5:
        print(f"Valor da venda: R$ {valor}")
        print(f"Desconto de 8%: R$ {valor * 0.08}")
        print(f"Valor final com cartão de débito: R$ {valor * 0.92}")
    case 6:
        print(f"Valor da venda: R$ {valor}")
        print(f"Desconto de 7%: R$ {valor * 0.07}")
        print(f"Valor final com cartão de crédito: R$ {valor * 0.93}")
    case _:
        print("Opção inválida, tente novamente.")




