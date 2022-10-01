<?php 

$letters = array('K', 'F', 'C');

for($i = 0; $i < count($letters); $i++) {
    echo $letters[$i];
}

foreach($letters as $letter) {
    echo $letter . ' ';
}

$l = 0;
while($l < count($letters)) {
    echo $letters[$l];
    $l++;
}


$foods = [
    'Pizza' => 'Margarita',
    'Burger' => 'Cheese',
    'Soup' => 'is wet'
];

foreach($foods as $food => $val) {
    echo  $food . ' : ' . $val . '. ';
}

?>