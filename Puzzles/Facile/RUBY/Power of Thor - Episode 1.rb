
# https://www.codingame.com/training/easy/power-of-thor-episode-1

STDOUT.sync = true

light_x, light_y, initial_tx, initial_ty = gets.split(" ").collect { |x| x.to_i }

a=initial_tx;
b=initial_ty;

loop do
  remaining_turns = gets.to_i

  z='';
  if light_y>b 
      z='S'
      b+=1
  elsif light_y<b
      z='N'
      b-=1
  end

  if light_x>a
      z+='E'
      a+=1
  elsif light_x<a
      z+='W'
      a-=1
  end

  puts z
end
