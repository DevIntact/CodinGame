
# https://www.codingame.com/training/easy/unique-prefixes

g=[]
h=[]
gets.to_i.times {
  word = gets.chomp
  g<<word.chars
}
g.each_with_index{ |v,k|
  h[k]=[]
  g.each_with_index{ |t,m|
    if k != m
      s=''
      v.each_with_index{ |l,p|
        if l!=t[p]
          s+=l
          break
        else
          s+=l
        end
      }
      h[k]<<s
    end
  }
}
puts h.map{_1.max}