import string

def is_pangram(sentence):
    # Convert the sentence to lowercase
    sentence = sentence.lower()
    
    # Create a set of all alphabet letters
    alphabet_set = set(string.ascii_lowercase)
    
    # Create a set of all characters in the sentence
    sentence_set = set(sentence)
    
    # Check if all alphabet letters are in the sentence set
    return alphabet_set.issubset(sentence_set)
