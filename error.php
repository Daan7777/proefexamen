<?php include "includes/header.php"; ?>

<div class="content">
    <!-- Page content -->
    <div class="errorMessage">
        <h1>Er is iets verkeerd gegaan!</h1>
        <br/>
        <p style="color:red; font-weight:bold;">
            <?php
                session_start();
                $error = $_SESSION['error'];
                echo $error;
            ?>
        </p>
        <br/>
        <ul>
            <li><a href="register.php">Ga terug</a></li>
        </ul>
    </div>
</div>

<?php include "includes/footer.php" ?>