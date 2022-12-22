<?php
 include "includes/conn.php";
// Get the form data
$companyName = $_POST['companyName'];
$companyNameRadio = $_POST['companyNameRadio'];
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

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'agencyxxl');

// Check if the email is unique
$query = "SELECT id FROM companyacc WHERE email = ?";
$query = "SELECT id FROM privateacc WHERE email = ?";

$stmt = $conn->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // First go to error page then to register again !!!!!!!!!!!!!!!!!!!!!!1
  header("Location: something.php");
} else {
  // Insert the user into the database
  if ($companyNameRadio == 'enabled') {
    // Insert the form data into companyacc
    $query = "INSERT INTO companyacc (companyName, firstName, middleName, lastName, email, phoneNumber, address1, address2, city, state, zipCode, country, password) VALUES ('{$companyName}', '{$firstName}', '{$middleName}', '{$lastName}', '{$email}', '{$phoneNumber}', '{$address1}', '{$address2}', '{$city}', '{$state}', '{$zipCode}', '{$country}', '{$hashedPassword}') ON DUPLICATE KEY UPDATE companyName='{$companyName}', firstName='{$firstName}', middleName='{$middleName}', lastName='{$lastName}', phoneNumber='{$phoneNumber}', address1='{$address1}', address2='{$address2}', city='{$city}', state='{$state}', zipCode='{$zipCode}', country='{$country}', password='{$hashedPassword}'";  
    header("Location: login.php");
  } else {
    // Insert the form data into privateacc
    $query = "INSERT INTO privateacc (firstName, middleName, lastName, email, phoneNumber, address1, address2, city, state, zipCode, country, password) VALUES ('$firstName', '$middleName', '$lastName', '$email', '$phoneNumber', '$address1', '$address2', '$city', '$state', '$zipCode', '$country', '$hashedPassword')";
    header("Location: login.php");
  }
  
  // Execute the query
  $conn->query($query);
}

// Close the database connection
$conn->close();

?>