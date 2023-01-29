<form method="get"action="")>
    <input type="text"name="key">
    <input type="hidden"name="controller"value="problem"/>
    <button type="submit" name="action"value="search">Search</button>
</form>
[<a href="?controller=problem&action=newProblem">เพิ่ม รายละเอียกของการแก้ไขปัญหา</a>]</br>
<table border="1">
    <tr> <td>วันที่เข้าแก้ไขปัญหา</td> <td>เวลาที่เข้าแก้ไขปัญหา</td> <td>รายการปัญหา</td><td>รายละเอียดรายการปัญหา</td><td>รายละเอียดการแก้ไขปัญหา</td><td>ทีมที่แก้ไข</td><td>สถานะของปัญหา</td><td>แก้ไข</td> <td>ลบ</td> 
<?php
    foreach($problemList as $problem){
        echo "<tr>
        <td>$problem->solve_date</td> 
        <td>$problem->solve_time</td> 
        <td>$problem->mo_report_data</td> 
        <td>$problem->pl_detail</td> 
        <td>$problem->solve_detail</td> 
        <td>$problem->team_name</td> 
        <td>$problem->solveS_status</td> 
        <td><a href=?controller=problem&action=updateForm&solve_id=$problem->solve_id>แก้ไข</td>
        <td><a href=?controller=problem&action=deleteConfirm&solve_id=$problem->solve_id>ลบ</td>
       </tr>";
    }
   echo "</table>"
?>
