
# https://www.codingame.com/training/easy/encryptiondecryption-of-enigma-machine

o = gets.chomp
n = gets.to_i
r=[]
3.times do
  r<<gets.chomp.chars
end
m = gets.chomp.chars
a=('A'..'Z').to_a

if o=='ENCODE'

  m.each_with_index{
    |v,k|
    m[k]=a[(a.index(v)+n+k)%26]
  }
  3.times{
    |i|
    m.each_with_index{
      |v,k|
      m[k]=r[i][a.index(v)]
    }
  }

  puts m*''

else

    r=r.reverse
    3.times{
      |i|
      m.each_with_index{
        |v,k|
        m[k]=a[r[i].index(v)]
      }
    }
    m.each_with_index{
      |v,k|
      m[k]=a[(a.index(v)-n-k)%26]
    }

    puts m*''

end