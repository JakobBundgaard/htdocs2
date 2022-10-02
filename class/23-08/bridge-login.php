<?php 
$correct_email = 'a@a';
$correct_pass = 'pass';
$user_name = 'Jakob';

if($correct_email != $_POST['email']) {
    http_response_code(400);
    header('Location: login.php');
    exit();
}

if($correct_pass != $_POST['password']) {
    http_response_code(400);
    header('Location: login.php');
    exit();
}

header('Location: admin.php?name='.$user_name);

?>