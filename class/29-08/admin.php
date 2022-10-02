<?php 
session_start();
if(!$_SESSION) {
    header('Location: login.php');
}

$_title = "Welcome {$_SESSION['name']}";

require_once __DIR__.'/comp_header.php';

?>

admin