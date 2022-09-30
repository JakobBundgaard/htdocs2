<?php 

$cars = array('A', 'B', 'C');

for($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . '<br>';
}

'<br>';

foreach($cars as $car) {
    echo $car . '<br>';
}

$f = 0;
while($f < count($cars)) {
    echo $cars[$f];
    $f++;
}

// Loop assoc

$persons = [
    '1' => 'Allan',
    '2' => 'Rick',
    '3' => 'Sharon'
];

foreach($persons as $person => $val) {
    echo 'Person ' . $person . ' is ' . $val;
}

?>