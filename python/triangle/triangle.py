def validate(sides):
    a,b,c=sides
    return a>0 and b>0 and c>0 and a + b >= c and b + c >= a and a + c >= b
    
def equilateral(sides):
    a,b,c=sides
    if a==b==c and validate(sides):
        return True
    else:
        return False


def isosceles(sides):
    a,b,c=sides
    if validate(sides):
        if a==b!=c or a==c!=b or b==c!=a or a==b==c:
            return True
        else:
            return False
    else:
        return False

def scalene(sides):
    a,b,c=sides
    if validate(sides):
        if a!=b!=c!=a :
            return True
        else:
            return False
    else:
        return False
