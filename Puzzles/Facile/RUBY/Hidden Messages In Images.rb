
# https://www.codingame.com/training/easy/hidden-messages-in-images

w, h = gets.split(" ").collect { |x| x.to_i }
pixel = ''
h.times do
  inputs = gets.split(" ")
  for j in 0..(w-1)
    pixel+= (inputs[j].to_i).to_s(2)[-1]
  end
end
pixel = pixel.chars.each_slice(8).map(&:join)
pixel.map{
  $><< (_1.to_i(2)).chr
}
