#! /usr/env python
# -*- coding: UTF-8 -*-

"""socket 功能"""

import socket
import sys
from app.mysql import Mysql
from app.decrypt import Decrypt

class Mysocket(object):
    """socket 操作"""

    def __init__(self):
        self.host_ip = '192.168.10.10'
        self.port = 2046

        try:
            self.my_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        except socket.error, msg:
            print msg[1]
            sys.exit()
        self.my_socket.bind((self.host_ip, self.port))
        self.my_socket.listen(10)

    def reciver_quest(self):
        """接收客户端输的连接和数据"""
        while 1:
            conn, addr = self.my_socket.accept()
            print 'Connected with ' + addr[0] + ':' + str(addr[1])

            post_data = conn.recv(1024)

            crypt = post_data[0:2]
            text = post_data[3:]
            decrypt = Decrypt()

            if crypt == 'des':
                data = decrypt.des_crypt(text)
                data = self.get_user_and_pd(data)
            else:
                data = decrypt.rsa_crypt(text)
                data = self.get_user_and_pd(data)

            mysql = Mysql()
            if mysql.make_query(data[0], data[1]) >= 0:
                conn.sendall('chenggong')
            else:
                conn.sendall('shibai')

    def close_socket(self):
        """关闭socket连接"""
        self.my_socket.close()

    def get_user_and_pd(self, data):
        """把用户名和密码分离"""
        result = data.split(',')
        return result
