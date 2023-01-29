
# https://www.codingame.com/training/easy/decode-the-message

p = gets.to_i
c = gets.chomp.chars

while p >= 0

    $><< c[p%c.size]
    p = ((p-c.size)/c.size).to_i

end