import os
from flask import Flask, request, session, g, redirect, url_for, abort, \
             render_template, flash
import MySQLdb
conn = MySQLdb.connect(host='localhost', user='root',passwd='yxs') 
conn.select_db('blog');
cursor = conn.cursor()
cursor.execute("select * from books_user")
data = cursor.fetchone() 
cursor.close()
conn.close()
print data[1]
