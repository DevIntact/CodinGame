# https://www.codingame.com/training/medium/scrabble

g={}
r={'aeionrtlsu'=>1,'dg'=>2,'bcmp'=>3,'fhvwy'=>4,'k'=>5,'jx'=>8,'qz'=>10}
n = gets.to_i
n.times do
  w = gets.chomp
  a=w.chars
  g[w]=a
end
letters = gets.chomp.chars.tally

g.map{ |k,v|
  s = letters.dup
  v.map{ |l|
    !s.key?(l) || s[l] == 0 ? (g.delete(k);break) : s[l]-=1
  }
}

g.map{
  d = 0
  _2.map{ |l|
    r.map{ |j,e|
      d+= j.include?(l) ? e : 0
    }
  }
  g[_1]=d
}

puts g.key(g.values.max)