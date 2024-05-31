def append(list1, list2):
    return list1+list2

def concat(lists):
    a=[]
    for i in lists:
        a.extend(i)
    return a

def filter(function, list):
    a=[]
    for i in list:
        if function(i):
            a.append(i)
    return a

def length(list):
    cnt=0
    for i in list:
        cnt=cnt+1
    return cnt

def map(function, list):
    a=[]
    for x in list:
        a.append(function(x))
    return a

def foldl(function, list, initial):
    for i in list:
        initial=function(initial,i)
    return initial

def foldr(function, list, initial):
    for i in list[::-1]:
        initial=function(initial,i)
    return initial


def reverse(list):
    return list[::-1]
