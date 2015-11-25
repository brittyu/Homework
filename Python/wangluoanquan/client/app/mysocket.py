#!/usr/bin/python
# -*- coding: UTF-8 -*-

"""创建socket连接服务端"""

import socket
import sys

class Mysocket(object):
    """socket相关操作"""

    def __init__(self):
        self.host_ip = '192.168.10.10'
        self.port = 2046
        try:
            self.my_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        except socket.error, msg:
            print msg[1]
            sys.exit()

    def make_connect(self, data):
        """通过socket和服务端连接"""
        self.my_socket.connect((self.host_ip, self.port))
        while 1:
            self.my_socket.sendall(data)
            post_data = self.my_socket.recv(1024)

            if post_data == 'chenggong':
                return 0
            else:
                return -1


    def make_close(self):
        """关闭socket连接"""
        self.my_socket.close()

