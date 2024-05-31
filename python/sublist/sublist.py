"""
This exercise stub and the test suite contain several enumerated constants.

Enumerated constants can be done with a NAME assigned to an arbitrary,
but unique value. An integer is traditionally used because it’s memory
efficient.
It is a common practice to export both constants and functions that work with
those constants (ex. the constants in the os, subprocess and re modules).

You can learn more here: https://en.wikipedia.org/wiki/Enumerated_type
"""

# Possible sublist categories.
# Change the values as you see fit.
SUBLIST = 'sublist'
SUPERLIST = 'superlist'
EQUAL = 'equal'
UNEQUAL = 'unequal'

def sub_super(one,two):
    for i in range(len(one)-len(two)+1):
        if not two or one[i:i+len(two)]==two:
            return True
    return False

def sublist(list_one, list_two):
    if list_one == list_two:
        return EQUAL
    elif sub_super(list_one, list_two):
        return SUPERLIST
    elif sub_super(list_two, list_one):
        return SUBLIST
    return UNEQUAL