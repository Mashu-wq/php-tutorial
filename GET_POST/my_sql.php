<?php
echo "Welcome to the stage where we ready to get connected to a database<br>";

/*
Ways to connect a MySQL Database
1.MySQLi extension
2.PDO
*/

//connecting to the Database
$serverName = "localhost";
$userName = "root";
$password = "";

//create a connection
$conn = mysqli_connect($serverName, $userName, $password);
echo "Connection successful";

//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}
