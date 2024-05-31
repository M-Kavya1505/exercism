def is_valid(isbn):
    a=list(isbn.replace('-',''))
    total=0
    if len(a)!=10:
        return False
    length=len(a)
    if a[-1]=='X':
        a=a[0:9]
        a.append('10')
    
    for i in a:
        if i.isdigit():
            total=total+length*int(i);
            length=length-1
        else:
            return False
    print(total)
    if total%11==0:
        return True
    else:
        return False