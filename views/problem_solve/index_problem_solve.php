<form method="get"action="")>
    <input type="text"name="key">
    <input type="hidden"name="controller"value="problem_solve"/>
    <button type="submit" name="action"value="search">Search</button>
</form>

[<a href="?controller=problem_solve&action=new_problem_solve">ADD</a>]</br>

<table border="1">
    <tr> <td>รหัสการแก้ไขปัญฆา</td> <td>รหัสรายงาน</td> <td>วันที่แก้ไข</td> <td>เวลาที่แก้ไข</td> <td>รายชื่อผู้แก้ไข</td><td> รายละเอียกการแก้ไข</td> <td>การแก้ไขเสร็จหรือไหม</td><td>รายการปัญหาที่ต้องการแก้ไข</td></tr>
<?php
    foreach($solvelist as $solve){
        echo "<tr>
        <td>$solve->solve_id</td>
        <td>$solve->mo_id</td>
        <td>$solve->solve_date</td> 
        <td>$solve->solve_time</td> 
        <td>$solve->solve_name</td> 
        <td>$solve->solve_detail</td> 
        <td>$solve->solve_yesorno</td> 
        <td>$solve->mo_list_problem</td>

        <td><a href=?controller=problem_solve&action=updateForm&solve_id=$solve->solve_id>update</td>
        <td><a href=?controller=problem_solve&action=deleteConfirm&solve_id=$solve->solve_id>delate</td></tr>";
    }
   echo "</table>"
?>
