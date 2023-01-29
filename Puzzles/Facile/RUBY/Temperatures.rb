
# https://www.codingame.com/training/easy/temperatures

n = gets.to_i
g={}
inputs = gets.split(" ")
for i in 0..(n-1)
  t = inputs[i].to_i
  g[t]=t.abs
end

g=g.sort.reverse.to_h
if g.empty?
  puts 0
else
  puts g.key(g.values.min)
end