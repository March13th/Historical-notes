def change(aList):
    aList[-1]='and '+str(aList[-1])
    print(','.join(aList))

list=['apples','bannas','tofu','cats']
change(list)