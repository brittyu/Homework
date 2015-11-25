#! /usr/env python
# -*- coding: UTF-8 -*-

"""界面的创建和相关操作"""

from Tkinter import Frame, IntVar, Label, Entry,\
        Radiobutton, Button
from app.crypt import Crypt
from app.mysocket import Mysocket
import tkMessageBox


class Interface(Frame):
    """界面操作"""

    def __init__(self, master=None):
        Frame.__init__(self, master)
        self.pack()
        self.create_widgets()

    def create_widgets(self):
        """构建界面"""
        self.radio_value = IntVar()

        Label(self, text="网络安全").grid(row=0, column=2, pady=10)
        # 生成label
        Label(self, text="用户名").grid(row=3, column=1, pady=10)
        Label(self, text="密码").grid(row=4, column=1)
        # 生成用户名和密码输入框
        self.name_input = Entry(self)
        self.name_input.grid(row=3, column=2)
        self.password = Entry(self)
        self.password['show'] = '*'
        self.password.grid(row=4, column=2)

        self.radio = Radiobutton(self, text="rsa", variable=self.radio_value, padx=20, value=1)
        self.radio.grid(row=5, column=1)

        self.radio1 = Radiobutton(self, text="des", variable=self.radio_value, padx=20, value=2)
        self.radio1.grid(row=6, column=1)

        self.alert_button = Button(self, text='提交', command=self.submit)
        self.alert_button.grid(row=7, column=1)

    def submit(self):
        """提交处理"""
        name = self.name_input.get() or 'username'
        password = self.password.get() or "password"
        cryption = self.radio_value.get() or "1"
        # 构造传输的数据
        data = name + ',' + password

        cryption = Crypt()
        my_socket = Mysocket()
        # 判断使用des还是rsa
        if cryption == 2:
            data = "des" + data
            need = 8 - (len(data) % 8)
            while need > 0:
                data += " "
                need -= 1
            result = cryption.des_encrypt(data)
            result = "des" + result
        else:
            result = cryption.rsa_encrypt(data)
            result = "rsa" + result
        result = my_socket.make_connect(result)

        if result >= 0:
            tkMessageBox.showinfo('Message', '%s' % '合法用户')
        else:
            tkMessageBox.showinfo('Message', '%s' % '非法用户')
