<table border=1>
<tr><td>รหัสการแก้ไขปัญหา</td><td>วันที่แก้ไข</td><td>เวลาที่แก้ไข</td><td>รายชื่อผู้แก้ไข</td><td>รายละเอียกการแก้ไข</td><td>การแก้ไขเสร็จหรือไหม</td><td>รายการปัญหาที่ต้องการแก้ไข</td></tr>
<form method="get" action="">
<?php echo "<br>Are you sure to delete this <br>
<tr><td>$solve->solve_id</td>
<td>$solve->solve_date</td> 
<td>$solve->solve_time</td> 
<td>$solve->solve_name</td> 
<td>$solve->solve_detail</td> 
<td>$solve->solve_yesorno</td> 
<td>$solve->mo_list_problem</td> </tr>";?>
    <input type="hidden" name="controller" value="problem_solve">
    <input type="hidden" name="id" value="<?php echo $solve->solve_id; ?>">
    <button type="submit" name="action" value="index_problem_solve">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
