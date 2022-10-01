<?php 

$cars = array('Volvo', 'Fiat', 'Lada');
$letters = array('A', 'B', 'C');
$fruits = array('Apple', 'Orange', 'Banana');

for($i = 0; $i < count($cars); $i++) {
    echo $cars[$i];
}

foreach($cars as $cars) {
    echo $cars . ' ';
}

// $f = 0;
// while($f < count($cars)) {
//     echo $cars[$f];
//     $f++;
// }

// $f = 0;
// while($f < count($cars)) {
//     echo $cars[$f] . '<br>';
//     $f++;
// }

// $f = 0;
// while($f < count($fruits)) {
//     echo $fruits[$f] . '<br>';
//     $f++;
// }

$persons = [
    'Adam' => 'Techie',
    'Sofie' => 'Gamer',
    'Swift' => 'Quick'
];

foreach($persons as $person => $val) {
    echo 'Name ' . $person . ' is a ' . $val . '. ';
}

?>