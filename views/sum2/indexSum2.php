
<table border="1">
    <tr><td>ชื่อคน</td> <td>จำนวนทีมที่อยู่</td> <td>จำนวนงานที่แก้</td> 
<?php
    foreach($sum2List as $sum2){
        echo "<tr>
         
        <td>$sum2->officer_name $sum2->officer_lastname</td>
        <td>$sum2->sumteam</td>  
        <td>$sum2->success</td>  
        </tr>";
    }
   echo "</table>"
?>
