import  socket

host=''#不同程序里表示接受所有连接的方法是不一样的，有可能0.0.0.0
port = 2000

s=socket.socket()
s.bind((host,port))

while True:
    print('before listen')
    s.listen(5)
    print('before accept')
    connection,address = s.accept()
    print('after accept')

    #取出所有数据
    buffer_size = 1000
    r = b''
    while True:
        request = connection.recv(buffer_size)
        r += request
        #取到的数据长度不够recv的参数时
        if len(request) < buffer_size:
            break
    print('ip and request {}\n{}'.format(address,request))
    print(request.decode('utf-8'))

    response = b'<h1>neineinei</h1>'
    connection.sendall(response)

    connection.close()