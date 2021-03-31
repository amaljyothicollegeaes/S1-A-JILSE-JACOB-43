import csv
with open('c1.csv',newline='') as csvfile:
    d=csv.DictReader(csvfile)
    print("authors original_title")
    for r in d:
        print(r['authors'],r['original_title'])
