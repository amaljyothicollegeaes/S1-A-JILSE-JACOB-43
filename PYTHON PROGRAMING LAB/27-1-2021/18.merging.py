Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def mer(d1,d2):
	return(d1.update(d2))

>>> d1={'a':1,'b':2}
>>> d2={'c':3,'d':4}
>>> mer(d1,d2)
>>> print(d1)
{'a': 1, 'b': 2, 'c': 3, 'd': 4}
>>> 