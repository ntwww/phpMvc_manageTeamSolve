<table border=1>
<tr><td>รหัสรายงาน</td><td>วันที่เข้าแก้ไขปัญหา</td> <td>เวลาที่เข้าแก้ไขปัญหา</td> <td>รายการปัญหา</td><td>รายละเอียดรายการปัญหา</td><td>รายละเอียดการแก้ไขปัญหา</td><<td>ทีมที่แก้ไข</td><td>สถานะของปัญหา</td></tr>
<form method="get" action="">

<?php 
echo "<br>คุณต้องการที่จะลบข้อมูลนี้ใช่ไหม?<br>
<tr><td>$problemList->mo_id</td>
<td>$problemList->solve_date</td> 
<td>$problemList->solve_time</td> 
<td>$problemList->mo_report_data</td> 
<td>$problemList->pl_detail</td> 
<td>$problemList->solve_detail</td> 
<td>$problemList->team_name</td> 
<td>$problemList->solveS_status</td> 

</tr>";?>
    <input type="hidden" name="controller" value="problem">
    <input type="hidden" name="solve_id" value="<?php echo $problemList->solve_id; ?>">
    <button type="submit" name="action" value="indexProblem">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
