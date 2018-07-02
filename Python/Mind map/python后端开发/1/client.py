# coding:utf-8
import socket
#socket是操作系统用来进行网络通信的底层方案
#创建一个socket对象
s= socket.socket()
#主机（域名或者）IP和端口
host = 'www.baidu.cn'
port = 80
#使用connect函数连接上主机，参数是一个tuple
s.connect((host,port))
#连接上后，可以通过这个函数得到本机的ip和端口
ip,port  = s.getsockname()
print('本机ip和port {} {}'.format(ip,port))

#构造一个http请求
http_request = 'GET / HTTP/1.1\r\nhost:{}\r\n\r\n'.format(host)
#发送http请求给服务器
#send函数只接受bytes类型
#str.encode把str转换成bytes，编码是utf-8
request = http_request.encode('utf-8')
print('请求',request)
s.send(request)

#接收服务器的响应数据
#参数是长度，这里是1023个字节
#所以超过1023就得不到
buffer_size = 1023
response = s.recv(buffer_size)

#输出响应的数据，bytes类型
print('响应',response)
#转成str再输出
print('响应的str格式',response.decode('utf-8'))




