<?php include "includes/header.php" ?>
<div>
    <!--searchbar retactive with everything -->
</div>
<div>
        <table class="striped">
            <tr class="header">
                <td>Id</td>
                <td>Name</td>
                <td>Title</td>
            </tr>
            <?php
                
               while ($row = mysql_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row[ID]."</td>";
                   echo "<td>".$row[Name]."</td>";
                   echo "<td>".$row[Title]."</td>";
                   echo "</tr>";
               }

            ?>
        </table>
<table>
    
</table>
</div>
<div>
<!--table with vacatures and company names -->

</div>
<div>
<!--table with CV and usernames -->

</div>

<?php include "includes/footer.php" ?>
