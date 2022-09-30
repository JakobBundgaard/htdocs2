<?php 

$letters = array('A', 'B', 'C');
for($i = 0; $i < count($letters); $i++) {
    echo $letters[$i];
}

foreach($letters as $letter) {
    echo $letter;
}

$f = 0;
while($f < count($letters)) {
    echo $letters[$f];
    $f++;
}

//  ASSOC

$persons = [
    '1' => 'Else',
    '2'  => 'bjørk',
    '3' => 'karl'
];

foreach($letters as $letter => $val) {
    echo 'Bogstav ' . $letter . ' er ' . $val;
}


?>