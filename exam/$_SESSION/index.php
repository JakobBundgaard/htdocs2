<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
// echo "Session variables are set.";
// '<br>';
// echo $_SESSION["favcolor"];

$name = $_SESSION['name'] = "Jako";
// echo $_SESSION['name'];
echo $name;



?>

</body>
</html> 