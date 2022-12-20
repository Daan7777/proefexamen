<?php

// Connect to the database
$connection = mysqli_connect('localhost', 'root', '');

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Connection was successful
echo '';

// Close the connection
mysqli_close($connection);

?>