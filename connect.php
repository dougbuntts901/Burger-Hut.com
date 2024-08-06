<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "burger_db";

// Establishing the connection
try {

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "Could not connect!";
}

// Checking the connection
if ($conn) {
    echo "You are connected! Helllo";
} else {
    echo "Could not connect! Error: " . mysqli_connect_error();
}