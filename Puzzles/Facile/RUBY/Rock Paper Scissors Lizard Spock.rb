
# https://www.codingame.com/training/easy/rock-paper-scissors-lizard-spock

def check(v)
  e=[]
  r={
    'R'=>['L','C'],
    'C'=>['P','L'],
    'P'=>['R','S'],
    'L'=>['P','S'],
    'S'=>['R','C']
  }
  if v[0][1] == v[1][1]
    if v[0][0]<v[1][0]
        e=v[0]
    else e=v[1]
    end
  elsif r[v[0][1]].include?(v[1][1])
    e=v[0]
  else e=v[1]
  end

  return e
end

g=[]
h={}

gets.to_i.times{
  numplayer, signplayer = gets.split
  g<<[numplayer.to_i,signplayer]
}

while g.size > 1

  g=g.each_slice(2).to_a
  g.each_with_index{
    z=check(_1)
    !h.key?(z[0]) ? h[z[0]]=[] : 0
    h[z[0]] << (z[0]==_1[0][0]?_1[1][0]:_1[0][0])
    g[_2]=z
  }

end

p g[0][0]
puts h[g[0][0]]*' '