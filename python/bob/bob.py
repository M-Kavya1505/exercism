
def response(hey_bob):
    hey_bob=hey_bob.strip()
    #First need to check for empty input - otherwise leads to index error
    if not hey_bob:
        return "Fine. Be that way!"
    elif hey_bob[-1]=='?':
        if hey_bob.isupper():
            return "Calm down, I know what I'm doing!"
        else:
            return "Sure."
    elif hey_bob.isupper():
        return 'Whoa, chill out!'
    return 'Whatever.'

