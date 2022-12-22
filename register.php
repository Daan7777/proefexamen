<?php
 include "includes/header.php";
?>

<div class="content">
<form action="process-form.php" method="post">
  <label for="companyNameRadio">Bedrijfsnaam toevoegen?</label>
  <br/>
  <input type="checkbox" onclick="boxChecked()" name="companyNameCheckbox" id="companyNameCheckbox">
  <br>
  <br>
  <div id="companyChecked">
    <label for="companyName">Bedrijfsnaam</label>
    <input type="text" name="companyName" id="companyName">
  </div>
  <label for="firstName">Voornaam</label>
  <input type="text" name="firstName" id="firstName" required>
  <br>
  <label for="middleName">Tussenvoegsel</label>
  <input type="text" name="middleName" id="middleName">
  <br>
  <label for="lastName">Achternaam</label>
  <input type="text" name="lastName" id="lastName" required>
  <br>
  <label for="email">Email</label>
  <input type="email" name="email" id="email" required>
  <br>
  <label for="phoneNumber">Telefoonnummer</label>
  <input type="tel" name="phoneNumber" id="phoneNumber" required>
  <br>
  <label for="address1">Adres 1</label>
  <input type="text" name="address1" id="address1" required>
  <br>
  <label for="address2">Adres 2</label>
  <input type="text" name="address2" id="address2">
  <br>
  <label for="city">Stad</label>
  <input type="text" name="city" id="city" required>
  <br>
  <label for="state">Staat/provincie</label>
  <input type="text" name="state" id="state" required>
  <br>
  <label for="zipCode">Zip code</label>
  <input type="text" name="zipCode" id="zipCode" required>
  <br>
  <label for="country">Land</label>
  <input type="text" name="country" id="country" required>
  <br>
  <label for="password">Wachtwoord</label>
  <input type="password" name="password" id="password" required>
  <br>
  <input type="submit" value="Verstuur">
</form>

</div>
</body>
 <?php include "includes/footer.php" ?>   
</html>


