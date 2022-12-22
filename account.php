<?php 
include "includes/header.php"; 
/*
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} */
?>

<div class="content">
  <!-- Back to top button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top" style="font-size:200%; width:90px; height:90px;">^</button>

    <div class="edit">
    <h1 style="padding:10px;">Edit</h1>
    <form action="#" method="post">
        <label for="">Your name</label><br>
        <input type="text" name="firstName" id="firstName">
        <br>
        <label for="">Email</label><br>
        <input type="email" name="email" id="email">
        <br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password">
        <br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Edit account">
    </form>
    </div>


</div>
<?php include "includes/footer.php" ?> 