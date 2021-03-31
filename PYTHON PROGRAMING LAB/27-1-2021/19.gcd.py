Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def gcd(n1,n2):
	i=1
	while i<n1 and i<n2 :
		if(n1%i==0) and (n2%i==0):
			d=i
		i=i+1
	return d

>>> n1=int(input("enter first number"))
enter first number50
>>> n2=int(input("enter second number"))
enter second number30
>>> print(gcd(n1,n2))
10
>>> 