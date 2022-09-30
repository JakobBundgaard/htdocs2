<?php 
// loop array

$fruits = array('Apple', 'Orange', 'Banana');

for($i =0; $i < count($fruits); $i++) {
    echo $fruits[$i] . '<br>';
}

foreach($fruits as $fruit) {
    echo $fruit . '<br>';
}

$f = 0;
while($f < count($fruits)) {
    echo $fruits[$f] . '<br>';
    $f++;
}

$j = 0;
do {
    echo $fruits[$j] . '<br>';
    $j++;
} while ( $j < count($fruits));
   


'<br>';
// loop ass array
$persons = [
    'p1' => 'Jake',
    'p2' => 'Mary',
    'p3' => 'Klaus'
];

foreach($persons as $person => $val) {
    echo $person . ' is ' . $val . '<br>';
}

?>