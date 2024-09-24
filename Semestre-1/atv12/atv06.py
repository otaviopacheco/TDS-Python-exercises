media = 0
totTurma = int(input("Insira o total de alunos"))
for i in range(0,totTurma,1): 
    nota = float(input("Insira a nota"))
    media = nota + media
print("a media da turma é {}".format(media/totTurma))