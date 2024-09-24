vetor_Imp = [11, 5, 10, 8, 23, 12, 91, 21, 7, 9]
vetor_Par = [22, 34, 33, 53, 52, 41, 13, 14, 27, 81]
vector_R = []
tamVecImp = len(vetor_Imp) - 1
tamVecPar = len(vetor_Par) - 1
tamVecTot = tamVecImp + tamVecPar + 2

for i in range(tamVecTot):
    vector_R.append(vetor_Imp[i])  
    vector_R.append(vetor_Par[i])  
print(vector_R)