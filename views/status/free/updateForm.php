<!-- <form method="GET" action="">
<label>วันที่เข้าแก้ไขปัญหา<input type="text" name="solve_date" value="<?php echo $status->solve_date; ?>"></label><br>
<label>เวลาที่เข้าแก้ไขปัญหา<input type="text" name="solve_time" value="<?php echo $status->solve_time; ?>"></label><br>
    <label>สถานะของปัญหา<select name="solveS_id">
            <?php foreach ($problemStatusList as $problemStatus) {
                if ($problemStatus->solveS_status == $status->solveS_status) {
                    echo "<option value=$problemStatus->solveS_id selected>$problemStatus->solveS_status</option>";
                } else {
                    echo "<option value=$problemStatus->solveS_id>$problemStatus->solveS_status</option>";
                }
            }
            ?>
        </select></label><br>
        <label>รายละเอียดการแก้ไขปัญหา<input type="text" name="solve_detail" value="<?php echo $status->solve_detail; ?>"></label><br>

    <input type="hidden" name="solve_id" value="<?php echo $status->solve_id;?>">
    <input type="hidden" name="controller" value="status">
    <button type="submit" name="action" value="indexStatus">Back</button>
    <button type="submit" name="action" value="update">Update</button>
</form> -->