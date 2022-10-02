<?php 

$heroes = [
    
];

if(empty($heroes)) {
    http_response_code(404);
}

echo json_encode($heroes);

?>