from sqlalchemy import *
from migrate import *


from migrate.changeset import schema
pre_meta = MetaData()
post_meta = MetaData()
followers = Table('followers', pre_meta,
    Column('follower_id', Integer),
    Column('followed_id', Integer),
)

post = Table('post', pre_meta,
    Column('id', Integer, primary_key=True, nullable=False),
    Column('body', String),
    Column('timestamp', DateTime),
    Column('user_id', Integer),
)

post = Table('post', post_meta,
    Column('id', Integer, primary_key=True, nullable=False),
    Column('title', String(length=64)),
    Column('content', String(length=120)),
)

user = Table('user', pre_meta,
    Column('id', Integer, primary_key=True, nullable=False),
    Column('nickname', String),
    Column('email', String),
    Column('about_me', String),
    Column('last_seen', DateTime),
)

user = Table('user', post_meta,
    Column('id', Integer, primary_key=True, nullable=False),
    Column('nickname', String(length=64)),
    Column('password', String(length=128)),
    Column('email', String(length=120)),
)


def upgrade(migrate_engine):
    # Upgrade operations go here. Don't create your own engine; bind
    # migrate_engine to your metadata
    pre_meta.bind = migrate_engine
    post_meta.bind = migrate_engine
    pre_meta.tables['followers'].drop()
    pre_meta.tables['post'].columns['body'].drop()
    pre_meta.tables['post'].columns['timestamp'].drop()
    pre_meta.tables['post'].columns['user_id'].drop()
    post_meta.tables['post'].columns['content'].create()
    post_meta.tables['post'].columns['title'].create()
    pre_meta.tables['user'].columns['about_me'].drop()
    pre_meta.tables['user'].columns['last_seen'].drop()
    post_meta.tables['user'].columns['password'].create()


def downgrade(migrate_engine):
    # Operations to reverse the above upgrade go here.
    pre_meta.bind = migrate_engine
    post_meta.bind = migrate_engine
    pre_meta.tables['followers'].create()
    pre_meta.tables['post'].columns['body'].create()
    pre_meta.tables['post'].columns['timestamp'].create()
    pre_meta.tables['post'].columns['user_id'].create()
    post_meta.tables['post'].columns['content'].drop()
    post_meta.tables['post'].columns['title'].drop()
    pre_meta.tables['user'].columns['about_me'].create()
    pre_meta.tables['user'].columns['last_seen'].create()
    post_meta.tables['user'].columns['password'].drop()
