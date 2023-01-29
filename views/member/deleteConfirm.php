<table border=1>
<tr><td>ทีมที่แก้ไข</td><td>ชื่อ</td><td>นามสกุล</td></tr>
<form method="get" action="">
<?php echo "<br>คุณต้องการที่จะลบข้อมูลนี้ใช่ไหม?<br>
<tr><td>$memberList->team_name</td>
<td>$memberList->officer_name</td> 
<td>$memberList->officer_lastname</td> 
</tr>";?>
    <input type="hidden" name="controller" value="member">
    <input type="hidden" name="teamn_id" value="<?php echo $memberList->teamn_id; ?>">
    <button type="submit" name="action" value="indexMember">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
