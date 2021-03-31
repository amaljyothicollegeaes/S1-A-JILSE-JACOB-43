 import csv
with open('cs.csv',newline='') as csvfile:
    d=csv.reader(csvfile,delimiter=' ',quotechar='|')
    for r in d:
        print(','.join(r))

