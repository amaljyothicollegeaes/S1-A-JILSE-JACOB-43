Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def call():
    n = 0
    for x in range(1000,10000):
        num=str(x)
        number=int(x)
        first = int(num[0])
        second = int(num[1])
        third = int(num[2])
        fourth = int(num[3])
        if first%2==0:
            if second%2==0:
                if third%2==0:
                    if fourth%2==0:
                        for i in range(2,number):
                            if i*i==number:
                                print(number)

                                
>>> call()
4624
6084
6400
8464
>>> 