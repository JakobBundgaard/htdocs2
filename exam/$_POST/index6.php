<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="page6.php" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        if(empty($name)) {
            echo 'Name empty';
        }else {
            echo $name;
        }
    }
    ?>
</body>
</html>