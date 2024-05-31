def steps(number):
    if number<=0:
        raise ValueError("Only positive integers are allowed")
    a=0
    while number!=1:
        if number%2==0:
            number=number/2
            #a=a+1
        elif number%2!=0:
            number=3*number+1
            #a=a+1
        a=a+1
    return a