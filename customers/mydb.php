<?php

$host = "localhost"; //vdh-nuvt-obi
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " .mysqli_connect_error());
}



?>