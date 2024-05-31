def classify(number):
    """ A perfect number equals the sum of its positive divisors.

    :param number: int a positive integer
    :return: str the classification of the input integer
    """
    if number<=0:
        raise ValueError("Classification is only possible for positive integers.")
    a=[]
    for i in range(1,number):
        if number%i==0:
            a.append(i)

    sum=0
    for i in a:
        sum=sum+int(i);

    if sum==number:
        return 'perfect'
    elif number<sum:
        return 'abundant'
    elif number>sum:
        return 'deficient'

