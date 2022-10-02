<?php 
$_POST['name'] = 'Jakob';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="page13.php?name=<?php echo $_POST['name']; ?>">link</a>
</body>
</html>