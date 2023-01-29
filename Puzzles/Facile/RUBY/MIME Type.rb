
# https://www.codingame.com/training/easy/mime-type

n = gets.to_i
q = gets.to_i
g={}
n.times do
  ext, mt = gets.split(" ")
  g[ext.upcase]=mt
end
q.times do
  a=gets.chomp+' '
  f = a.upcase.split('.')
  if f.size > 1
    f=f.pop.strip
    if g.has_key?(f)
      puts g[f]
    else
      puts "UNKNOWN"
    end
  else
    puts "UNKNOWN"
  end
end