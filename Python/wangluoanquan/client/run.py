#! /usr/env python
# -*- coding: UTF-8 -*-

"""运行脚本"""

from app import root
from app import Interface

app = Interface(root)
app.master.title('网络安全')
app.mainloop()
