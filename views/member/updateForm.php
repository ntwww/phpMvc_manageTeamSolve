<form method="GET" action="">

    <label>ทีมที่แก้ไข<select name="team_id">
            <?php foreach ($teamSolveList as $teamSolve) {
                if ($teamSolve->team_name == $member->team_name) {
                    echo "<option value=$teamSolve->team_id selected>$teamSolve->team_name</option>";
                } else {
                    echo "<option value=$teamSolve->team_id>$teamSolve->team_name</option>";
                }
            }
            ?>
        </select></label><br>
 
        
    <input type="hidden" name="teamn_id" value="<?php echo $member->teamn_id;?>">
    <input type="hidden" name="controller" value="member">
    <button type="submit" name="action" value="indexMember">Back</button>
    <button type="submit" name="action" value="update">Update</button>
</form>