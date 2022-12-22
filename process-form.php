<?php
 include "includes/conn.php";
 
// Get the form data
if (isset($_POST['companyNameCheckbox'])) {
  $isCompany = $_POST['companyNameCheckbox'];
} else {
  $isCompany = 0;
}
$companyName = $_POST['companyName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zipCode'];
$country = $_POST['country'];
$password = $_POST['password'];

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if email is unique
$query = "SELECT id FROM accounts WHERE email = ?";

$stmt = $conn->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // Go to error page if email exists
  session_start();
  $_SESSION['error'] = "Email bestaat al.";
  header("Location: error.php");
} else {
  // Insert the user into the database
  $query = "INSERT INTO accounts (isCompany, companyName, firstName, middleName, lastName, email, phone, adres1, adres2, city, state, zipCode, country, password) VALUES ('{$isCompany}', '{$companyName}', '{$firstName}', '{$middleName}', '{$lastName}', '{$email}', '{$phoneNumber}', '{$address1}', '{$address2}', '{$city}', '{$state}', '{$zipCode}', '{$country}', '{$hashedPassword}')";  
  header("Location: login.php");
  
  // Execute the query
  $conn->query($query);
}

// Close the database connection
$conn->close();

?>