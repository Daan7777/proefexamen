<?php include "includes/header.php" ?>
<div class=bodyadmin>
<div>
    <!--searchbar retactive with everything -->
</div>
<div>
        <table class="striped">
            <tr class="trheader">
                <td class="tdheader">Bedrijf</td>
                <td class="tdheader">Naam</td>
            </tr>
            <?php
                //include "includes/delete.php";
                $query = mysqli_query($conn, "SELECT * FROM accounts");
               while($row = mysqli_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row[companyName]."</td>";
                   echo "<td>".$row[firstName]." ".$row[lastName]."</td>";
                   echo "<td><button>verwijderen</button></td>";
                   echo "</tr>";
               }    if(null){
                echo "Er zijn geen Accounts.";
            };

            ?>
        </table>
</div>
<div>
<!--table with vacatures and company names -->
<table class="striped">
            <tr class="trheader">
                <td class="tdheader">Bedrijf</td>
                <td class="tdheader">Vacature</td>
            </tr>
<?php
                $query = mysqli_query($conn, "SELECT * FROM vacancy");
               while($row = mysqli_fetch_array($query)) {
                $id ="id=acc".$row[id];
                   echo "<tr>";
                   echo "<td>".$row[1]."</td>";
                   echo "<td>".$row[2]."</td>";
                   echo "<td><button " ,$id , ">verwijderen</button></td>";
                   echo "</tr>";
               }    if(null){
                echo"<td>Er zijn geen Vacatures.</td>";
            };

            ?>
</table>
</div>
<div>
<!--table with CV and usernames -->
<table class="striped">
            <tr class="trheader">
                <td class="tdheader">CV</td>
                <td class="tdheader">Naam</td>
            </tr>
            <?php
                $query = mysqli_query($conn, "SELECT * FROM resume");
               while($row = mysqli_fetch_array($query)) {
                $id ="id=acc".$row[id];
                   echo "<tr>";
                   echo "<td>".$row[education]."</td>";
                   echo "<td>".$row[2]."</td>";
                   echo "<td><button " ,$id , ">verwijderen</button></td>";
                   echo "</tr>";
               }    if(null){
                echo "<tr><td>Er zijn geen Cv's.</td></tr>";
            };

            ?>
</table>
</div>
</div>
<?php include "includes/footer.php" ?>
