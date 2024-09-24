sum = 0 
array = []
for i in range(10): 
    num = int(input("Insira os valores "))
    tam = len(array) 
    array.append(num)
    if num <= 0: 
        print("Foi inserido um valor negativo ou equalente a zero.")
        break  
    elif num >= 5: 
        for j  in range(tam-1, -1,-1):
            sum += array[j] 
    print("soma dos numeros maiores que 5 :", sum) 
