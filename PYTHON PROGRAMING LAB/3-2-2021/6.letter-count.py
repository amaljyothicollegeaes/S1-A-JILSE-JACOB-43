Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def char_frequency(str1):
    dict = {}
    for n in str1:
        keys = dict.keys()
        if n in keys:
            dict[n] += 1
        else:
            dict[n] = 1
    return dict

>>> print(char_frequency('jilsejacob'))
{'j': 2, 'i': 1, 'l': 1, 's': 1, 'e': 1, 'a': 1, 'c': 1, 'o': 1, 'b': 1}
>>> 