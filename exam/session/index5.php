<?php 
session_start();

$_SESSION['name'] = 'Kalle';
$_SESSION['title'] = 'My Site';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['title'] ?></title>
</head>
<body>
    <p> Hej <?= $_SESSION['name'] ?></p>
</body>
</html>