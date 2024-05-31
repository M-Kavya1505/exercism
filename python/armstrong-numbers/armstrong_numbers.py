def is_armstrong_number(number):
    sum=0
    num1=str(number)
    char_list=list(num1)
    length=len(char_list)
    """for i in range(length):
        sum = sum + int (char_list[i])**length
    """
    for i in char_list:
        sum = sum + int(i)**length
    
    if sum==number:
        return True
    else:
        return False
