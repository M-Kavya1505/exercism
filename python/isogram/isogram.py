
def is_isogram(string):

    string=string.replace("-","").replace(" ","")

    a=[]
    for i in string.lower():
        if i.isalpha():
            if i in a:
                return False
            else:
                a.append(i)
        else:
            return False
    return True

    #string=string.lower()
    #return len(string)==len(set(string))        