nome = ""
endereco = ""
fone = 0
cep = ''
agenda = {
    'nome': nome,
    'endereco': endereco,
    'fone': fone,
    'cep': cep
}
vecAgendas = []

for i in range(0,1,1):
    nome= str(input("Insira o nome: "))
    agenda["nome"] = nome
    endereco= str(input("Insira o endereço:"))
    agenda["endereco"] = endereco
    fone= int(input("Insira o Telefone: "))
    agenda["fone"] = fone
    cep= str(input("Insira o CEP: "))
    agenda["cep"] = cep
    vecAgendas.append(agenda)
print(vecAgendas)