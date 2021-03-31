Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def pyr():
	n=int(input("Enter the number : "))
	i=1
	for i in range(1,n+1):
		j=1
		for j in range(1,i+1):
			temp=i*j;
			print(temp,end="  ")
		print("")

		
>>> pyr()
Enter the number : 4
1  
2  4  
3  6  9  
4  8  12  16  
>>> 