
# https://www.codingame.com/training/easy/defibrillators

lon = gets.chomp.gsub(',','.').to_f
lat = gets.chomp.gsub(',','.').to_f

n = gets.to_i
g={}
n.times do
  d = gets.chomp.split(';')
  a=d[-2].gsub(',','.').to_f
  b=d[-1].gsub(',','.').to_f
  g[d[1]]=((lon-a)**2+(lat-b)**2)**0.5
end

puts g.key(g.values.min)