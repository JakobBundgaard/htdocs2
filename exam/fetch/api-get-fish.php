<?php 
$fish = array('Trout', 'Lemon Sole', 'Monkfish');

if(empty($fish)) {
    http_response_code(404);
}

echo json_encode($fish);

?>