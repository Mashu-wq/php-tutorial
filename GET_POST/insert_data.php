<?php

//connecting to the Database
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "mayesha";

//create a connection
$conn = mysqli_connect($serverName, $userName, $password, $database);

//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

//Variables to be inserted into the table
$name = "Riad";
$destination = "Russia";

//sql query to be executed
$sql = "INSERT INTO `phpTrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

//Add a new trip to the Trip table in database
if ($result) {
    echo "The record has been inserted successfully!<br>";
} else {
    echo "The record was not inserted successfully because of this error --->" . mysqli_error($conn);
}
