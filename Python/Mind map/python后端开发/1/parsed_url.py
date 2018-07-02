def parsed_url(url):
    # http还是https？
    protocol='http'
    if url[0:8]=='https://':
        protocol = 'https'
        u=url.split('://')[1]
    elif url[0:7]=='http://':
        u = url.split('://')[1]
    else:
        u=url

    #host是什么
    p=u.find('/')
    if p == -1:
        host = u
        path = '/'
    else:
        host = u[:p]
        path = u[p:]

    #端口是什么
    #默认端口
    port_dict = {'http':80,'https':443}
    if ':' in host:
        h=host.split(':')
        host = h[0]
        port = h[1]
    else:
        port = port_dict[protocol]

    return protocol,host,port,path


