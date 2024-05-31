def pig(word):
    if word[0] in 'aeiou' or word[:2] in ['yt', 'xr']:
        return word + "ay"
    if word.startswith('qu'):
        return word[2:] + word[:2] + "ay"
    if 'qu' in word:
        index = word.index('qu') + 2  
        return word[index:] + word[:index] + "ay"
    if word.startswith('y'):
        return word[1:] + word[0] + "ay"
    for index, char in enumerate(word):
        if char in 'aeiouy':
            return word[index:] + word[:index] + "ay"
    
    return word + "ay"

def translate(text):
    a=[]
    for word in text.split():
        a.append(pig(word))
    return ' '.join(a)
    #return ' '.join([pig(word) for word in text.split()])
