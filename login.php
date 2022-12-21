<?php

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate the form data
  $errors = array();
  if (empty($email)) {
    $errors[] = 'Email is verplicht';
  }
  if (empty($password)) {
    $errors[] = 'Wachtwoord is verplicht';
  }

  // If there are no errors, check if the email and password match a user in the database
  if (empty($errors)) {
    $query = "SELECT id, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      if (password_verify($password, $user['password'])) {
        // The email and password match a user in the database, so log the user in
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
        exit;
      } else {
        $errors[] = 'Email en wachtwoord komen niet overeen';
      }
    } else {
      $errors[] = 'Er is geen gebruiker gevonden met dit email adres';
    }
  }
}

?>

<?php include "includes/header.php"; ?>
<div class="content">
    <!-- Page content -->

<h1>Inloggen</h1>
  <?php
  if (!empty($errors)) {
    echo '<ul>';
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo '</ul>';
  }
  ?>
  <form action="process-login.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Wachtwoord:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Inloggen">
  </form> 

</div>

<?php include "includes/footer.php" ?>