ct = 0 
media = 0
media1 = 0
media2 = 0
while ct < 2:
    ct += 1
    num = float(input("Insira o numero: "))
    if num <= 10: 
        media1 = num
        print(num)
    elif num >= 11: 
        media2 = num
    elif media1 < media2:
        media = media1
        print(media)
    elif media2 < media1: 
        media= media2
        print(media)
        