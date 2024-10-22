# stack = []
# for i in range(6):
#     element = input("Insira um elemento: ")
#     stack.append(element)
#     print(stack)
#     if (i %2 ==0 and i !=0):
#         stack.pop()
#         print(stack)
# print(stack)

stack = []
for i in range(2):
    element = input("Insira um elemento: ")
    stack.append(element)
    print(stack)
stack.pop()
element = input("Insira um elemento: ")
stack.append(element)
stack.pop()
element = input("Insira um elemento: ")
stack.append(element)
print(stack)
