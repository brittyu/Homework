from app import app
from flask import render_template, flash, redirect
from .forms import LoginForm
from libraries.database import cursor, conn
from libraries.hello import * 

@app.route('/')
@app.route('/index')
def index():
    user = {'nickname': 'Miguel'}  # fake user
    posts = [  # fake array of posts
        { 
            'author': {'nickname': 'John'}, 
            'body': 'Beautiful day in Portland!' 
        },
        { 
            'author': {'nickname': 'Susan'}, 
            'body': 'The Avengers movie was so cool!' 
        }
    ]
    return render_template("index.html",
                           title='Home',
                           user=user,
                           posts=posts)

@app.route('/login', methods = ['GET', 'POST'])
def login():
    form = LoginForm()
    if form.validate_on_submit():
        flash('Login requested for OpenID = "%s", remember_me = %s' %
                (form.openid.data, str(form.remember_me.data)))
        return redirect('/index')
    return render_template('login.html',
            title = 'Sign in',
            form = form,
            providers = app.config['OPENID_PROVIDERS'])

@app.route('/checkdata')
def checkdata():
    cursor.execute("select * from books")
    data = cursor.fetchone()
    cursor.close()
    conn.close()
    return data[1]

@app.route('/sayhello')
def say():
    response = sayhello()
    return response
