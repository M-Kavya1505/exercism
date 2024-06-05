def factors(value):
    a=2
    b=[]
    while value>1:
        if value%a==0:
            b.append(a)
            value=value/a
        else:
            a=a+1
    return b