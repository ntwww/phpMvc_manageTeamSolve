<form action="" method="get">
    <label for="">รหัสการแก้ไขปัญหา<input type ="text" name="solve_id"/></label><br>
    <label for="">วันที่แก้ไขปัญหา<input type ="text" name="solve_date"/></label><br>
    <label for="">เวลาที่แก้ไปัญหา<input type ="text" name="solve_time"/></label><br>
    <label for="">รายชื่อผู้แก้ไขปัญหา<input type ="text" name="solve_name"/></label><br>
    <label for="">รายละเอียกการแก้ไขปัญหา<input type ="text" name="solve_detail"/></label><br>
    <label for="">การแก้ไขเสร็จหรือไหม<input type ="text" name="solve_yesorno"/></label><br>
    <label >รายการปัญหาที่ต้องการแก้ไข<select name="mo_id">
    <?php 
     foreach($molist as $mo)
     {
         echo "<option value =$mo->mo_id>$mo->mo_list_problem</option>";
     }
    ?></select></label><br>

        <input type="hidden" name="controller" value="problem_solve">
        <button type="submit" name ="action" value="index_problem_solve">Back</button>
        <button type="submit" name ="action" value="add_problem_solve">Save</button>
</form>
/