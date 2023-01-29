
# https://www.codingame.com/training/easy/calculator

n = gets.to_i
s=''
n.times do
  s+= gets.chomp
end
s=s.gsub(/x/,'*').gsub(/AC/,'A')
z=[]
a=''

(0...s.size).map{ |i|

  if s[i].match?(/[0-9]/)
    a+=s[i]
    puts a
  else

    if s[i]=='A'
      puts 0
      z=[]
      a=''
    else
      !a.empty?? z<<a.to_f : 0
      ['+','-','/','*'].include?(z[-1]) ? z.pop : 0

      t= eval z*''
      t=t.to_f.round(3).to_s.sub(/\.?0+$/,'')
      puts t

      if s[i]=='='

        if i+1<s.size && s[i+1]=='='
          x=z[-2]
          y=z[-1]
          z<<x
          z<<y
        elsif i+1<s.size && !s[i+1].match?(/[0-9]/)
          z=[t]
        else
          z=[]
        end

      elsif s[i]=='/' || s[i]=='*'
        z.unshift('(')
        z<<')'
        z<<s[i]
      else
        z<<s[i]
      end

      a=''

    end

  end

}