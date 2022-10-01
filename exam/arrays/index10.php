<?php 

$ships = array('Carrier', ' destroyer', ' Frigate');

for($i = 0; $i < count($ships); $i++) {
    echo $ships[$i];
}

foreach($ships as $ship) {
    echo $ship;
}

$s = 0;
while($s < count($ships)) {
    echo $ships[$s];
    $s++;
}

$courses = [
    '1' => 'Web dev',
    '2' => 'Design',
    '3' => 'Databases 101',

];

foreach($courses as $course => $val) {
    echo 'Course nr. ' . $course . ' is ' . $val . '. ';
}

?>