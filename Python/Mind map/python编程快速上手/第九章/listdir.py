import os
here =os.path.abspath(os.getcwd())
print(here)
def listdir(pwd):
    for Dir,directorys,files in os.walk(pwd):
        for file in files:
            if os.path.isfile(os.path.join(pwd,str(file))):
                print('文件名称是：',file)
        for directory in directorys:
            if os.path.isdir(os.path.join(pwd,str(directory))):
                print('文件夹是',directory)
                newpath = os.path.join(pwd,directory)
                listdir(newpath)
listdir(here)