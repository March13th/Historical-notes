from xt5_6_1 import displayInventory
def addToInventory(inbertory,addedItems):
    for i in addedItems:
        if i in inbertory:
            pass
        else:
            inbertory[i]=0
    return  inbertory
inv={'gold coin':42,'rope':1}
dragonLoot=['gold coin','dagger','gold coin','gold coin','ruby']
inv=addToInventory(inv,dragonLoot)
displayInventory(inv)