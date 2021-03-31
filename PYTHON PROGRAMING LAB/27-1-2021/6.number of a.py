Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> a=['jilse','jacob','john','sam']
>>> str1=(' '.join(a))
>>> count=0
>>> for i in str1: 
    if i == 'a': 
        count = count + 1

>>> print ("Count of 'a' in the list is : " + str(count))
Count of 'a' in the list is : 2
>>> 