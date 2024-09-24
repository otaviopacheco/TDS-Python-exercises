media = 0
for i in range(0,11,1):
    num = float(input("Insira o numero desejado: "))
    media = (num+ media)
media = media/(i-1)
print(media)