def file_read(fname):
    with open(fname) as f:
       # x Content_List is the list that contain the read lines.
            c = f.readlines()
            print(c)
            #print(len(c))


file_read("file2.txt")

