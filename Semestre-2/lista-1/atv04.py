array = [10,11,0,-1]
arrayTam = len(array)
for i in range(-1, arrayTam-1, 1):
    if array[i] < 0: 
        array[i] = 0
        # caso programa deva substituir os numeros negativos por zero e manter no array usar esse treço
    elif array[i] == 0:
        array.pop(i)
    #  caso programa deva substituir os numeros negativos por zero e retirar do array usar esse treço
    # if array[i] == 0:
    #     array.pop(i)
    elif array[i] <= 10: 
        array[i] = 1
    elif array[i] > 10 : 
        array[i] = 2
print (array)