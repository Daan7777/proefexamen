<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facature zoeken</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/script.js"></script>
</head>
<body>
    <?php include "conn.php" ?>
<!-- Navbar comes here -->
<nav>
  <ul>
    <div class="language js-language-picker">
        
  <form action="" class="language-picker__form">
    <select name="language-picker-select" id="language-picker-select">
      <option lang="de" value="deutsch">Deutsch</option>
      <option lang="en" value="english" selected>English</option>
      <option lang="fr" value="francais">Français</option>
      <option lang="it" value="italiano">Italiano</option>
      <!-- other language options -->
    </select>
  </form>
</div>

<div class="nav">
<div class="logo">
    <img src="./images/logo.png" alt="Logo">
  </div>
    <nav class="navMenu">
      <a href="#">Home</a>
      <a href="#">Blog</a>
      <a href="#">Work</a>
      <a href="#">About</a>
      <div class="dot"></div>
</div>
    </nav>
  </ul>
</nav>
