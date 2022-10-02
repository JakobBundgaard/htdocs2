<?php 

$foods = array();

if(empty($foods)) {
    http_response_code(404);
};

echo json_encode($foods);

?>