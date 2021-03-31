Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def list():
	term=0
	i=0
	lis = []
	while term==0:
		n = input("enter the data : ")
		lis.insert(i, n)
		i=i+1
		print('enter 0 to continue & 1 to end')
		term=int(input())
	lsum=len(lis)
	sum=0

	for i in range(0,lsum):
		s=int(lis[i])
		sum=sum+s


	print("data in list is : ")
	print(lis)
	print("sum of list elements is : ",sum)

	
>>> list()
enter the data : 5
enter 0 to continue & 1 to end
0
enter the data : 7
enter 0 to continue & 1 to end
0
enter the data : 34
enter 0 to continue & 1 to end
0
enter the data : 99
enter 0 to continue & 1 to end
1
data in list is : 
['5', '7', '34', '99']
sum of list elements is :  145
>>> 