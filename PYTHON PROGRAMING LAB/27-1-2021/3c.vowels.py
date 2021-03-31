Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> string = "welcome to my world guys"
>>> print("Given String: \n",string)
Given String: 
 welcome to my world guys
>>> vowels = "AaEeIiOoUu"
>>> v = [each for each in string if each in vowels]
>>> print(v)
['e', 'o', 'e', 'o', 'o', 'u']
>>> 