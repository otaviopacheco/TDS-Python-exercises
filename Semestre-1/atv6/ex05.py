nomeAluno = str(input("Insira o nome do aluno : ")) 
notaTr = float(input("Insira a nota do trabalho: "))
notaPr = float(input("Insira a nota da prova: "))
notaQu = float(input("Insira a nota qualitativa: "))
media = (((notaPr*5)/10) + ((notaTr*3)/10) + ((notaQu*2)/10))
print ("a media final do aluno:",nomeAluno," É ",media)