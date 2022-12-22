<?php 
include "includes/header.php"; 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<div class="content">
  <!-- Back to top button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top" style="font-size:200%; width:90px; height:90px;">^</button>

  <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>



</div>
<?php include "includes/footer.php" ?> 