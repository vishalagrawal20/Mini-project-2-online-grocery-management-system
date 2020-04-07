<?php 

include_once("connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = trim($_POST['email']);

    $password = trim($_POST['pass']);

} else {

    die('getted');

}


$getQuery = "SELECT * FROM `user` where `email` = '$email' and `password` = '$password' ;";

$result = mysqli_query($connection, $getQuery);



$userData = mysqli_fetch_array($result);

if (!$userData) {

    die('Invalid password and email combination.');

}


$_SESSION['user'] = $email;

header('location:index.php');
?>