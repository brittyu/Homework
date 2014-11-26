# oid, db import form app but not used
from app import app, lm, oid
from flask.ext.login import logout_user, current_user,\
        login_required
from flask import render_template, flash, redirect, g, session,\
        url_for
from .forms import LoginForm
from .models import User

################################################################################
# login
###############################################################################
@app.before_request
def before_request():
    g.user = current_user


@app.route('/', methods=['GET', 'POST'])
@app.route('/index', methods=['GET', 'POST'])
@login_required
def index(page=1):
	return render_template("index.html", title="Home", nickname = current_user)


@app.route('/login', methods=['GET', 'POST'])
@oid.loginhandler
def login():
    if g.user is not None and g.user.is_authenticated():
        return redirect(url_for('index'))
    form = LoginForm()
    if form.validate_on_submit():
        session['remember_me'] = form.remember_me.data
        q = User.query.filter_by(nickname = form.username.data).first()
        if q is not None:
            g.user = q.id
            load_user(q)
            flash("logged in successfully")
            return redirect('/index')

    return render_template('login.html',
            title = 'Sign In',
            form = form)


@app.route('/admin')
@login_required
def admin():
    g.user = current_user
    return render_template("admin.html",
        title = "Administartion",
        user=g.user)


@app.route('/logout')
@login_required
def logout():
    logout_user()
    return redirect('/login')


@lm.user_loader
def load_user(id):
    return User.query.get(int(id))

#######################################################################
# post
#######################################################################
