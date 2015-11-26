#! /usr/bin python
# -*- coding: UTF-8 -*-

"""启动模块"""

from app.mysocket import Mysocket

begin = Mysocket()
begin.reciver_quest()
begin.close_socket()

