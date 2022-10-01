<?php 

$letters = array('A', 'B', 'C');

for($i = 0; $i < count($letters); $i++) {
    echo $letters[$i]. ' ';
}

foreach($letters as $letter) {
    echo $letter . ' ';
}

$l = 0;
while($l < count($letters)) {
    echo $letters[$l];
    $l++;
}

$cars = [
    'Porche' => 'Sportscar',
    'Lada' => 'Bad car',
    'StaionWagon' => 'Familycar'
];

foreach($cars as $car => $val) {
    echo $car . ' is a ' . $val . '. ';
}

?>