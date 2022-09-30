<?php 

$letters = array('A', 'B', 'C');

for($i = 0; $i < count($letters); $i++) {
    echo $letters[$i];
}

foreach($letters as $letter) {
    echo $letter;
}

// ASSOC array
$assoc_let = [
    '1' => 'A',
    '2' => 'B',
    '3' => 'C'
];

foreach($assoc_let as $let => $val) {
    echo 'Letter: ' . $let . ' is ' . $val . ' ';
}


?>