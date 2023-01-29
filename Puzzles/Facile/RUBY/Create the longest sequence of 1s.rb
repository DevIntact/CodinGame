
# https://www.codingame.com/training/easy/create-the-longest-sequence-of-1s

a = gets
g=[]
(0...a.size).map{
    e=a[_1]
    a[_1]='1'
    z=a.split('0')
    g<<z.max
    a[_1]=e=='0'?'0':'1'
}
p g.max.size