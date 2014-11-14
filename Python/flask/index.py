from flask import Flask, url_for, render_template
app = Flask(__name__)

@app.route('/')
def index():
    return "Index page"

@app.route('/user/')
def user():
    return 'user'

@app.route('/hello/')
def hello():
    name = 'hello world'
    return render_template('hello.html', name = name)

@app.route('/post/<int:post_id>')
def show_post(post_id):
    return 'Post %d' % post_id

@app.route('/login', methods = ['GET', 'POST'])
def login():
    error = None
    if request.method== 'POST':
        if request.form['username'] != app.config['USERNAME']:
            error = 'Invalid username'
        elif request.form['password'] != app.config['PASSWORD']:
            error = 'Invalid password'
        else:
            session['logged_in'] = True
            flash('You were logged in')
            return redirect(url_for('show_entries'))

    return render_template('login.html', error = error)

@app.route('/logout')
def logout():
    session.pop('logged_in', None)
    flash('You were logged out')
    return redirect(url_for('show_entries'))

if __name__ == '__main__':
    app.run(debug = True)
