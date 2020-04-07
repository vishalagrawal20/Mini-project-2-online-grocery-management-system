<?php

define("DB_SERVER", "127.0.0.1");

define("DB_USER", "root");

define("DB_PASSWORD", "");

define("DB_DATABASE", "mini2");



$connection = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);



if (!$connection) {

    die('Not able to connect to the database;');

}

session_start();
