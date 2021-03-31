Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def word_count(str):
    counts = dict()
    words = str.split()

    for word in words:
        if word in counts:
            counts[word] += 1
        else:
            counts[word] = 1

    return counts

>>> x=word_count("twinkle twinkle little star how I wonder what you are")
>>> print(x)
{'twinkle': 2, 'little': 1, 'star': 1, 'how': 1, 'I': 1, 'wonder': 1, 'what': 1, 'you': 1, 'are': 1}
>>> 