<?php 

$correct_email = 'a@a';
$correct_pass = 'pass';
$user_name = 'Jakob';

if($correct_email != $_POST['email']) {
    http_response_code(400);
    header('Location: login2.php');
}

if($correct_pass != $_POST['password']) {
    http_response_code(400);
    header('Location: login2.php');
}

header('Location: admin2.php?name='.$user_name);

?>