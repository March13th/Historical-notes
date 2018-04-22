#coding=utf-8
#！python3
#pw.py - An insecure password locker program
PASSWORDS = {'email':'fjajifewojf2390a',
             'blog':'jfla23ikjf4',
             'wechat':'12345'}
import  sys,pyperclip
if len(sys.argv)<2:
    print('Usage: python pw.py [account] - copy account password')
    sys.exit()

account = sys.argv[1]

if account in PASSWORDS:
    pyperclip.copy(PASSWORDS[account])
    print('Password for {} copied to clipboard'.format(account))
else:
    print('there is no account named {}'.format(account))