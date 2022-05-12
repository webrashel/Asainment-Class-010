<?php


$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
// echo "<pre>";

if (empty($username) || empty($email) || empty($phone) || empty($password)) {

    $v_message = 'all feild is Requird';
} else {
    $v_message = 'every thing is ok';
}
