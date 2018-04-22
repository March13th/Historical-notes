stuff={'rope':1,'torch':6,'gold coin':42,'dagger':1,'arrow':12}
def displayInventory(Alist):
    print('Inventory:')
    sum=0
    for k,v in Alist.items():
        print('{} {}'.format(k,v))
        sum += v
    print('Total number of items: {}'.format(sum))

