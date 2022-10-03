<?php 

$letters = array('A', 'B', 'C');

for($i = 0; $i < count($letters); $i++) {
    echo $letters[$i];
}

foreach($letters as $letter) {
    echo $letter;
}


?>