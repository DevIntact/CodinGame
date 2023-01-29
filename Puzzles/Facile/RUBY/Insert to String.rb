
# https://www.codingame.com/training/easy/insert-to-string

s = gets.chomp.split('\n')
g={}
gets.to_i.times {
  r = gets.chomp.split('|')
  !g.key?(r[0].to_i) ? g[r[0].to_i]={} : 0
  g[r[0].to_i][r[1].to_i]=r[2]
}
g=g.sort_by {|k,v| k}.reverse.to_h
g.map{ |a,b|
  b=b.sort_by {|k,v| k}.reverse.to_h
  b.map{ |p,m|
    s[a]=s[a].insert(p,m.gsub(/\\n/,'¤'))
  }
}
puts (s*"\n").tr('¤',"\n")