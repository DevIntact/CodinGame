
# https://www.codingame.com/training/easy/happy-numbers

n = gets.to_i
n.times do
  x = gets.to_i
  g=[x]
  while x!=1
    x=x.to_i.digits.sum{_1**2}
    if g.include?(x)
      break
    end
    g<<x
  end
  puts g[0].to_s+' :'+(x==1?')':'(')
end
