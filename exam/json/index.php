<?php 

$a = 34;
if(isset($a)) {
    echo 'Variable set to: ' .  $a;
} else {
    echo "variable not set";
}

$age = array('Pete' => 34, 'Ben' => 45);

echo json_encode($age);

?>