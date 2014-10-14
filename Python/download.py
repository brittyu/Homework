#! /usr/bin/python*

import urllib

data = urllib.urlopen('https://class.coursera.org/pythonlearn-003/lecture');

print data.read();
