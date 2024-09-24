array = ["Y", "X", "S", "L", "P", "L", "A", "Ç"]
count= 0 
arrayTam = len(array)-1
letraInserida = str(input("Insira a letra que você  deseja procurar ou retirar: "))
letraInserida = letraInserida.upper()
if letraInserida not in array:
    print("Letra não encontrada!")
for i in range(arrayTam,-1,-1):
    if array[i] == letraInserida:
        array.pop(i)
        count = count + 1
        print("letra retirada", count, "vezes") 

# print(array)
