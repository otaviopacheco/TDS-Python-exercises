variaveis = []
for i in range(4):
      variaveis.append(input("Insira o dado:"))
agenda = {
    0: variaveis[0],
    1: variaveis[1],
    2: variaveis[2],
    3: variaveis[3]
}
vecAgendas = []
agendaTam = len(agenda)
 
for j in range(agendaTam-1,0,-1):
        for i in range(0,1,1):
            variaveis[i]=agenda[j]
        vecAgendas.append(agenda)
print(vecAgendas)