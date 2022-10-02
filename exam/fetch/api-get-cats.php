<?php 
$cats = [
    '1' => 'Tiger',
    '2' => 'Leopard',
    '3' => 'Lion'
];

if(empty($cats)) {
    http_response_code(404);
}

echo json_encode($cats);

?>