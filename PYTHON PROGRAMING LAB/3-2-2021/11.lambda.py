Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> s=int(input("enter the sides : "))
enter the sides : 5
>>> x=lambda a:a*a
>>> print(x(s))
25
>>> l=int(input("enter length : "))
enter length : 5
>>> b=int(input("enter breadth : "))
enter breadth : 4
>>> y=lambda l,b:l*b
>>> print(y(l,b))
20
>>> h=int(input("enter height of triangle : "))
enter height of triangle : 5
>>> b1=int(input("enter base of triangle : "))
enter base of triangle : 6
>>> z=lambda h,b1:(l*b1)/2
>>> print(z(h,b1))
15.0
>>> 