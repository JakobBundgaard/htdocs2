<?php 


$cars = array('volvo', 'ford', 'Mercer');
$cars2 = array("Car 1"=>"volvo", "Car 2"=>"ford", "Car 3"=>"Mercer");

$fruits = array( 
    "one" => "Banana", 
    "two" => "Pineapple", 
    "three" => "Strawberry", 
    "four" => "Forbidden"
); 

// echo $cars[0];

// for($i = 0; $i < count($cars2); $i++ ) {
//     echo "car= " . $cars2[$i];
// }

foreach($cars as $car => $val) {
    echo 'Key is ' . $car . ' value is ' . $val;
    echo '<br>';
    // header('Location: main.php');
}

// echo '<br>';

// $flexiple = array("Hire", "top", "freelance", "developers");

// foreach ($flexiple as $value) {
//   echo "$value <br>";
// }

// echo '<br>';

// $freelancer = array( 
//     "name" => "Eric", 
//     "email" => "Eric@gmail.com", 
//     "age" => 22, 
//     "gender" => "male"
// ); 
  
// // Loop through employee array 
// foreach($fruits as $key => $value) { 
//     echo $key . ": " . $value . "<br>"; 
// }

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

?>