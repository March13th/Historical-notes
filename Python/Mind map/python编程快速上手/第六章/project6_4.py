import pyperclip
text = pyperclip.paste()
pyperclip.copy(text)
#separate lines and add *
lines = text.split('\n')
for i in range(len(lines)):
    lines[i] = '* {}'.format(lines[i])
text = '\n'.join(lines)
pyperclip.copy(text)