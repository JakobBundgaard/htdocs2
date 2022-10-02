<?php 



$cars = [
    
];

if(empty($cars)) {
    http_response_code(404);
}


echo json_encode($cars);

?>