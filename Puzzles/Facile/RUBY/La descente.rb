
# https://www.codingame.com/training/easy/the-descent

STDOUT.sync = true 

loop do
  m={}
  8.times do
    |i|
    m[i]=gets.to_i
  end
  m=m.sort_by {|k,v| v}.reverse.to_h
  puts m.keys.first
end
