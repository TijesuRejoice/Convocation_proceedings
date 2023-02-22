<?php

// database details //
$host = "localhost";
$username = "root";
$password = "";
$dbname = "convocation_proceedings";

// creating the connection //
$conn = mysqli_connect($host, $username, $password, $dbname);


// check if the connection is successful or not //
if (!$conn) {
    die("Connection failed!" . mysqli_connect_error());
}
