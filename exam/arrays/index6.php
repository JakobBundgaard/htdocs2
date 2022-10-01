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

$names = [
    'Robert' => '34',
    'Jane' => '64',
    'Shane' => '25',
];

foreach($names as $name => $age) {
    echo 'Name: ' . $name . ', age: ' . $age . '. ';
}

?>