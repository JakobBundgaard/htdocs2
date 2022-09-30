<?php

$is_user_logged_in = false;

if ($is_user_logged_in) {
	$title = 'Logout';
    echo $title;
} else {
	$title = 'Login';
    echo $title;

}




$is_user_logged_in = false;

$title = $is_user_logged_in ? 'Logout' : 'Login';