<?php 
$correct_login = 'a@a';

if($correct_login != $_POST['email']) {
    http_response_code(404);
    header('Location: login.php');
}

session_start();
$_SESSION['name'] = 'Jakob';
header('Location: admin.php');

?>