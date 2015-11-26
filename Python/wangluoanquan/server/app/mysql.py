#! /usr/env python
# -*- coding: utf-8 -*-

"""mysql数据库操作"""

import MySQLdb
import sys

class Mysql:
    """数据库基本操作"""

    def __init__(self):
        try:
            self.con = MySQLdb.connect('localhost', 'homestead', 'secret', 'wangluoanquan')
        except MySQLdb.Error, e:
            print "Error %d: %s" % (e.args[0], e.args[1])
            sys.exit(1)

    def make_query(self, name, pd):
        """进行数据库查询工作"""
        cur = self.con.cursor()
        cur.execute("select * from user where username=%s and password=%s", (name, pd))

        rows = cur.fetchall()
        print len(rows)

        if len(rows) > 0:
            return 0
        else:
            return -1
