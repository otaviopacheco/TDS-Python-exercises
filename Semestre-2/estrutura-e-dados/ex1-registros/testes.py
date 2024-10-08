n = ""
e = ""
f = 0
c = ''
v = [[], []] # Criando uma lista com duas sublistas

while True:
    # Loop para inserir dados
    for i in range(1): # Para 6 entradas
        n = input("Insira o nome: ")
        e = input("Insira o endereço: ")
        f = int(input("Insira o Telefone: "))
        c = input("Insira o CEP: ")

    a = { # Criando o dicionário para cada entrada
    'nome': n,
    'endereco': e,
    'fone': f,
    'cep': c
    }

    v[1].append(a) # Adicionando o dicionário à segunda sublista
    print(f"Entrada adicionada: {v[1][-1]}") # Mostrando a última linha adicionada

    # Pergunta se o usuário deseja continuar ou ver todos os dados
    verification = input("Insira 1 para continuar ou 0 para mostrar todos: ")
    # if verification == '0':
    #     break # Sai do loop se o usuário escolher 0

    # Para mostrar todas as entradas, se o usuário escolher 0
    if verification == '0':
        print("\nTodos os dados inseridos:")
    for linha in v[1]:
        print(linha)
        input("Pressione Enter para continuar...") # Pausa até o usuário pressionar Enter

    # Pergunta se o usuário deseja reiniciar o processo
    continue_input = input("Deseja inserir mais dados? (s/n): ")
    if continue_input.lower() != 's':
        break # Sai do loop se o usuário não quiser continuar