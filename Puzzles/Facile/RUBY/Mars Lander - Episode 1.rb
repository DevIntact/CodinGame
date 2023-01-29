
# https://www.codingame.com/training/easy/mars-lander-episode-1

STDOUT.sync = true 

surface_n = gets.to_i
surface_n.times do
  land_x, land_y = gets.split(" ").collect { |x| x.to_i }
end

loop do
  x, y, h_speed, v_speed, fuel, rotate, power = gets.split(" ").collect { |x| x.to_i }

  if v_speed<-35
    power = 4
  else
    power = 4-power
  end

  puts [rotate,power]*' '
  
end
