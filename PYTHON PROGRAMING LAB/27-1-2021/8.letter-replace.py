Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def change_char(str1):
	char = str1[0]
	str1 = str1.replace(char, '$')
	str1 = char + str1[1:]
	return str1

>>> print(change_char('rrorere'))
r$o$e$e
>>> 