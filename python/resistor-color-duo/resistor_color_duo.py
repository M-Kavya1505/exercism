def value(colors):
    """
    a=['black',
           'brown',
           'red',
           'orange',
           'yellow',
           'green',
           'blue',
           'violet',
           'grey',
           'white'
          ]
    return a.index(colors[0])*10+a.index(colors[1])
    """
    a={'black':0,
           'brown':1,
           'red':2,
           'orange':3,
           'yellow':4,
           'green':5,
           'blue':6,
           'violet':7,
           'grey':8,
           'white':9
      }
    return a[colors[0]]*10+a[colors[1]]