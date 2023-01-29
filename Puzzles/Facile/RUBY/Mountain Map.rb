
# https://www.codingame.com/training/easy/mountain-map

n = gets.to_i
inputs = gets.split(" ")
g=[]
for i in 0..(n-1)
  height = inputs[i].to_i
  g<<height
end

d=g.max
e=0
h={}
while d>0
    h[e]=[]
    g.each_with_index{ |v,k|
      if v>=d
        h[e][k]=' '*(d-1)+'/'+' '*(v-d)*2+'\\'+' '*(d-1)
      else
        h[e][k]=' '*(v*2)
      end
    }
    d-=1
    e+=1
end

h.each_value{
  puts (_1*'').rstrip
}