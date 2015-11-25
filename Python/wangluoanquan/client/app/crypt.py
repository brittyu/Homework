#! /usr/env python
# -*- coding: UTF-8 -*-

"""des和rsa的加密操作"""

from Crypto.Cipher import DES
from Crypto.PublicKey import RSA
import base64

class Crypt(object):

    """des和rsa的加密操作"""

    def __init__(self):
        self.des_key = '12345678'
        self.public_key = RSA.importKey(open('mykey.pub'))

    def des_encrypt(self, text):
        """des 加密操作"""
        obj = DES.new(self.des_key)
        cryption = obj.encrypt(text)
        pass_hex = base64.b64encode(cryption)

        return pass_hex

    def rsa_encrypt(self, text):
        """rsa 加密操作"""
        result = self.public_key.encrypt(text, 32)

        return result[0]

