<?php
$email = "john.doe@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}


function sayHi($name) {
    echo 'Hi ' . $name;
}

sayHi('Jakob');

?> 