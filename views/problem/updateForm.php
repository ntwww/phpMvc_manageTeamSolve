<form method="GET" action="">
<label>วันที่เข้าแก้ไขปัญหา<input type="date" name="solve_date" value="<?php echo $problem->solve_date; ?>"></label><br>
<label>เวลาที่เข้าแก้ไขปัญหา<input type="time" name="solve_time" value="<?php echo $problem->solve_time; ?>"></label><br>
<label>รายละเอียดการแก้ไขปัญหา<input type="text" name="solve_detail" value="<?php echo $problem->solve_detail; ?>"></label><br>
    <label>ทีมที่แก้ไข<select name="team_id">
            <?php foreach ($teamSolveList as $teamSolve) {
                if ($teamSolve->team_name == $problemList->team_name) {
                    echo "<option value=$teamSolve->team_id selected>$teamSolve->team_name</option>";
                } else {
                    echo "<option value=$teamSolve->team_id>$teamSolve->team_name</option>";
                }
            }
            ?>
        </select></label><br>
        <label>สถานะของปัญหา<select name="solveS_id">
            <?php foreach ($problemStatusList as $problemStatus) {
                if ($problemStatus->solveS_Status == $problemList->solveS_Status) {
                    echo "<option value=$problemStatus->solveS_id selected>$problemStatus->solveS_status</option>";
                } else {
                    echo "<option value=$problemStatus->solveS_id>$teamSolve->solveS_status</option>";
                }
            }
            ?>
        </select></label><br>

    <input type="hidden" name="solve_id" value="<?php echo $problem->solve_id;?>">
    <input type="hidden" name="controller" value="problem">
    <button type="submit" name="action" value="indexProblem">Back</button>
    <button type="submit" name="action" value="update">Update</button>
</form>