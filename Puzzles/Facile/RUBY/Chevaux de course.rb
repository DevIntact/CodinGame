
# https://www.codingame.com/training/easy/horse-racing-duals

g=(1..gets.to_i).map{gets.to_i}.sort
h=[]
g.each_with_index.map{|v,k|
if k > 0
h<<v-g[k-1]
end
}
p h.min