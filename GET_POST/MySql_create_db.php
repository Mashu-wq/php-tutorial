<?php

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

//create a db
$sql =  "CREATE DATABASE dbHarry";
$result = mysqli_query($conn, $sql);

//check for the database creation success
if ($result) {
    echo "The db was created successfully";
} else {
    echo "The db was not created successfully of this error --->" . mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";


