<?php 

$dogs = [
    
];

if(empty($dogs)) {
    http_response_code(404);
}

echo json_encode($dogs);


?>