<?php
$host = "localhost";
$username  = "root";
$passwd = "";
$dbname = "cinema";

$connect = mysqli_connect($host, $username, $passwd, $dbname);

session_start();

if (!$connect) {
    die('Error connect to database!');
}

?>