<form method="GET" action="">
    <label for="">รหัสการแก้ไขปัญหา<input type ="text" name="solve_id"  value="<?php echo $solve->solve_id;?>"/></label><br>
    <label for="">วันที่แก้ไขปัญหา<input type ="text" name="solve_date" value="<?php echo $solve->solve_date?>"/></label><br>
    <label for="">เวลาที่แก้ไปัญหา<input type ="text" name="solve_time" value="<?php echo $solve->solve_time?>"/></label><br>
    <label for="">รายชื่อผู้แก้ไขปัญหา<input type ="text" name="solve_name" value="<?php echo $solve->solve_name?>"/></label><br>
    <label for="">รายละเอียกการแก้ไขปัญหา<input type ="text" name="solve_detail" value="<?php echo $solve->solve_detail?>"/></label><br>
    <label for="">การแก้ไขเสร็จหรือไหม<input type ="text" name="solve_yesorno" value="<?php echo $solve->solve_yesorno?>"/></label><br>
    <label>7<select name="mo_id">
        <?php foreach($molist as $mo){
        if($mo->mo_id==$solve->mo_id){
            echo "<option value=$mo->mo_id selected>$mo->mo_list_problem</option>";
        }
        else{
            echo "<option value=$mo->mo_id>$mo->mo_list_problem</option>";
        }
        }
        ?>
    </select></label><br>

    <input type="hidden" name="id" value="<?php echo $solve->solve_id; ?>">
    <input type="hidden" name="controller" value="problem_solve">
    <button type="submit" name= "action" value="index_problem_solve">Back</button>
    <button type="submit" name="action" value="update">Update</button>
</form>
