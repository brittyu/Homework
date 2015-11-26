#! /usr/env python
# -*- coding: utf-8 -*-

import MySQLdb
import sys


class Mysql:

    # 初始化连接数据库操作处理
    def __init__(self):
        try:
            self.con = MySQLdb.connect('localhost', 'homestead', 'secret', 'wangluoanquan')
        except MySQLdb.Error, e:
            print "Error %d: %s" % (e.args[0], e.args[1])
            sys.exit(1)

    # 检查是否数据库中存在要查询的用户
    def make_query(self, name, pd):
        cur = self.con.cursor()
        cur.execute("select * from user where username=%s and password=%s", (name, pd))

        rows = cur.fetchall()
        print len(rows)

        if len(rows) > 0:
            return 0
        else:
            return -1
