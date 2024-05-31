def to_rna(dna_strand):
    d_r={
        'G':'C',
        'C':'G',
        'T':'A',
        'A':'U'
    }
    rna=[]
    for i in dna_strand:
        rna.append(d_r[i])
    return ''.join(rna)
    