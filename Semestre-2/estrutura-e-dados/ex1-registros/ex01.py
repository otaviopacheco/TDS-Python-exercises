variaveis = []
for i in range(8):
      variaveis.append(input("Insira o dado:"))
agenda = {
    0: variaveis[i],
    1: variaveis[i],
    2: variaveis[i],
    3: variaveis[i]
}
vecAgendas = []
agendaTam = len(agenda)
 
for j in range(2):
    for i in range(0,1,1):
        variaveis[i]=agenda[j]
        vecAgendas.append(agenda)
print(vecAgendas) 