<!-- <form method="get"action="")>
    <input type="text"name="key"required>
    <input type="hidden"name="controller"value="sum"/>
    <button type="submit" name="action"value="search">Search</button>
</form> -->

<table border="1">
    <tr><td>ชื่อทีมที่แก้ไข</td> <td>จำนวนคนในทีม</td> 
<?php
    foreach($sumList as $sum){
        echo "<tr>
         
        <td>$sum->team_name </td>
        <td>$sum->nubteam</td>  
        </tr>";
    }
   echo "</table>"
?>
