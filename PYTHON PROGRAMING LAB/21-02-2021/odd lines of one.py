a=open('file2.txt','r')
b=open('hello2.txt','w')
c=a.readlines()
for i in range(0,len(c)):
    if(i%2 != 0):
        b.write(c[i])

    else:
        pass

b.close()

b=open('file2.txt','r')
d=b.read()
print(d)
a.close()
b.close()
