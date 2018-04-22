#电话号码和邮件地址提取程序
#step1,为电话号码创建一个正则表达式
import re,pyperclip
phoneRegex = re.compile(r'''(
(d{3}|\(\d{3}\))?           # area code
(\s|-|\.)?                  #separator
(\d{3})                     #fiest 3 digits
(\s|-|\.)                   #separator
(\d{4})                     #last 4 digits
(\s*(ext|x|ext\.)\s*(\d{2,5}))? #extension
)''',re.VERBOSE)

#step2,为Email地址创建一个正则表达式
#create email regex
emailRegex = re.compile(r'''(
[a-zA-Z0-9._%+-]+           #username
@                           #@ sympol
[a-zA-Z0-9.-]+              #domain name
(\.[a-zA-Z]{2,4})           #dot-something
)''',re.VERBOSE)

#step3,在剪贴板上找到所有匹配
text = str(pyperclip.paste())
matches = []
for groups in phoneRegex.findall(text):
    phoneNum = '-'.join([groups[1],groups[3],groups[5]])
    if groups[8] != '':
        phoneNum += ' x' + groups[8]
    matches.append(phoneNum)
for groups in emailRegex.findall(text):
    matches.append(groups[0])

#step4,所有匹配连接成一个字符串，复制到剪切板
if len(matches)>0:
    pyperclip.copy('\n'.join(matches))
    print('Copied to clipboard:')
    print('\n'.join(matches))
else:
    print('no phone numbers or email addresses found')
