Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def prin(r):
	if r==1:
		print("there are common elements")
	else:
		print("no common elements")

		
>>> def list(li1,li2):
	r=0
	for a in li1:
		for b in li2:
			if a==b:
				r=1
				return r

			
>>> li1=[1,2,3]
>>> li2=[4,5,6]
>>> prin(list(li1,li2))
no common elements
>>> li1=[1,2,3]
>>> li2=[4,2,6]
>>> prin(list(li1,li2))
there are common elements
>>> 