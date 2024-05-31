def square_root(number):
    #return int(pow(number,0.5))
    #return int(number**0.5)
    if(number==1):
        return 1
    flag=0
    for i in range(1,number+1):
        if i*i>number:
            return i-1 
            