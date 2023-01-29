
# https://www.codingame.com/training/easy/prefix-code

g={}
gets.to_i.times{
  b,c=gets.split(" ")
  g[b]=c.to_i.chr
}
s=gets.chomp
e=''
h=[]
(0...s.size).map{
  e+=s[_1]
  if g.key?(e)
    h<<g[e]
    e=''
  end
}

puts e!=''? 'DECODE FAIL AT INDEX '+(s.size-e.size).to_s : h*''