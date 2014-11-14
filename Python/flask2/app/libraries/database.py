import MySQLdb
from app import app

user = app.config['DBUSER']
password = app.config['DBPASSWORD']
host = app.config['DBHOST']
database = app.config['DBNAME']

conn = MySQLdb.connect(
            host = host,
            user = user,
            passwd = password,
        )

conn.select_db(database)
cursor = conn.cursor()
