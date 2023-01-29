<form method="get"action="")>
    <input type="text"name="key">
    <input type="hidden"name="controller"value="status"/>
    <button type="submit" name="action"value="search">Search</button>
</form>

<table border="1">
    <tr> <td>รหัสรายงาน</td> <td>วันที่เข้าตรวจ</td> <td>วันที่เข้าแก้ไขปัญหา</td> <td>เวลาที่เข้าแก้ไขปัญหา</td><td>รายการปัญหา</td><td>สถานะของปัญหา</td> <td>รายละเอียดการแก้ไขปัญหา</td>
<?php
    foreach($statusList as $status){
        echo "<tr>
        <td>$status->mo_id</td>
        <td>$status->mo_visit_date</td>
        <td>$status->solve_date</td> 
        <td>$status->solve_time</td> 
        <td>$status->mo_report_data</td> 
        <td>$status->solveS_status</td> 
        <td>$status->solve_detail</td> 
       </tr>";
    }
   echo "</table>"
   
?>