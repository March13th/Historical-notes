tableData = [['apples','oranges','cherries','banana'],
             ['Alice','Bob','Carol','David'],
             ['dogs','cats','moose','goose']]

def printTable(alist):
    for i in range(len(alist[0])):
        for j in alist:
            width=max([len(k) for k in j])
            print(j[i].rjust(width),end=" ")
        print('\n')
printTable(tableData)