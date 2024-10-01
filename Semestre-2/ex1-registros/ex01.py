nome = ""
endereco = ""
fone = 0
agenda = {
    'nome': nome,
    'endereco': endereco,
    'fone': fone
}
vecAgendas = []

for i in range(0,1,1):
    nome= str(input("Insira o nome: "))
    agenda["nome"] = nome
    endereco= str(input("Insira o endereço:"))
    agenda["endereco"] = endereco
    fone= int(input("Insira o Telefone: "))
    agenda["fone"] = fone
    vecAgendas.append(agenda)
print(vecAgendas)