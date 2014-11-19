from flask.ext.wtf import Form
from wtforms import  TextField, PasswordField, BooleanField, TextAreaField
from wtforms.validators import DataRequired

class LoginForm(Form):
    username = TextField('username', validators=[DataRequired()])
    remember_me = BooleanField('remember_me', default=False)
