#强口令检测
#长度不少于八个字符，同时包含大写和小写子符，至少又一位数字
import  re
password = input("input your password")

def judgepw(pw):
    if len(pw)<=8:
        print('长度错误')
    num1=re.compile(r'\d+')
    if num1.search(password)==None:
        print('没有数字')
    num2=re.compile(r'[a-z]+')
    if num2.search(password)==None:
        print('没有小写字母')
    num3=re.compile(r'[A-Z]+')
    if num3.search(password)==None:
        print('没有大写字母')

#版本二11
def checkPassword(pw):
    pwRegex = re.compile(r'''(
(?=^.{8,}$)
(?=.*\d+)
(?=.*[a-z]) 
(?=.*[A-Z]).*$
)''',re.VERBOSE)
    print(pwRegex.search(pw))
    if pwRegex.search(pw)==None:
        print('false')
checkPassword(password)