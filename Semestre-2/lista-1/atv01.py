list = [1,0,-2,-5,7,4,6]
simpleList = 0 
for i in range(len(list)-1,-1,-1 ):
    if list[i] > 5:
        list.pop(i)
simpleList = list[0]+list[1]+list[4]
list[4] = 100
print(simpleList)
print (list)