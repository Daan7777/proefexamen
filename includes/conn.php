<?php

// Localhost database connection
$conn = mysqli_connect('localhost', 'root', '', 'agencyxxl');

// Server database connection
//S$connection = mysqli_connect('20.229.0.9', 'examgroup420A', 'examgroup420A!!', 'agencyxxl')

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Connection was successful
//echo 'Connected to the database!';


?>