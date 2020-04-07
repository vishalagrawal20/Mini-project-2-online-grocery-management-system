<?php



require "connection.php";


if (!isset($_SESSION['user'])) {

    header("location: index.php");

}

session_destroy();

header("location: index.php");