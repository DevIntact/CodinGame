
# https://www.codingame.com/training/easy/metric-units

e = gets.split(' + ')

r={'km'=>1000,'m'=>1,'dm'=>0.1,'cm'=>0.01,'mm'=>0.001,'um'=>0.000001}

am=e[0].gsub(/[\d\.]/,'')
ad=e[0].gsub(/[^\d\.]/,'').to_f

bm=e[1].gsub(/[\d\.]/,'')
bd=e[1].gsub(/[^\d\.]/,'').to_f

c=r.key([r[am],r[bm]].min)

d=r[am]/r[bm]*ad+bd

puts [sprintf('%g',d),c]*''