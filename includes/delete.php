<?php
 include "conn.php"; 
  if(isset( mysqli_query($conn, "SELECT id FROM auccounts"))){
    mysqli_query($conn,"DELETE * FROM auccounts WHERE id IS id");
 }
?>