<?php

// Connect to the database
$connection = mysqli_connect('20.229.0.9', 'root', 'mysql1234');

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Connection was successful
echo 'Connected to the database!';

// Close the connection
mysqli_close($connection);

?>