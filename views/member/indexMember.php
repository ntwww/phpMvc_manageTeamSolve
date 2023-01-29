<form method="get"action="")>
    <input type="text"name="key">
    <input type="hidden"name="controller"value="member"/>
    <button type="submit" name="action"value="search">Search</button>
</form>

[<a href="?controller=member&action=newMember">เพิ่ม รายชื่อสมาชิกในทีมที่ออกปฎิบัติงาน</a>]</br>
<table border="1">
    <tr><td>ชื่อ</td> <td>นามสกุล</td> <td>ทีมที่แก้ไข</td><td>แก้ไข</td><td>ลบ</td> 
<?php
    foreach($memberList as $mem){
        echo "<tr>
        <td>$mem->officer_name</td>
        <td>$mem->officer_lastname</td> 
        <td>$mem->team_name</td> 
         <td><a href=?controller=member&action=updateForm&teamn_id=$mem->teamn_id>แก้ไข</td>
        <td><a href=?controller=member&action=deleteConfirm&teamn_id=$mem->teamn_id>ลบ</td></tr>";
    }
   echo "</table>"
?>
