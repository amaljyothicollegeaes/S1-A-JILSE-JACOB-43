Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> li=[1,2,3,4,5,6,7,8,9]
>>> print("List before removal : ",li)
List before removal :  [1, 2, 3, 4, 5, 6, 7, 8, 9]
>>> for x in li:
	if x%2==0:
		li.remove(x)

		
>>> print("List after removal of EVEN numbers :",li)
List after removal of EVEN numbers : [1, 3, 5, 7, 9]
>>> 