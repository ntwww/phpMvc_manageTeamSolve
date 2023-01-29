<form action="" method="get">
<label>วันที่เข้าแก้ไขปัญหา<input type="date" name="solve_date"/></label><br>
<label>เวลาที่เข้าแก้ไขปัญหา<input type="time" name="solve_time"/></label><br>
<label >รายการปัญหา<select name="mo_id">
    <?php 
     foreach($managementList as $management)
     {
        // if($management->ps_id= "0"){
        //     $boss="พบ";
        // }
        // else{
        //     $boss ="ไม่พบ";
        // }
         echo "<option value =$management->mo_id>$management->mo_report_data </option>";
         
     }
    ?></select></label><br>
<label>รายละเอียดการแก้ไขปัญหา<input type="text" name="solve_detail"/></label>><br>
    <label >ทีมที่แก้ไข<select name="team_id">
    <?php 
     foreach($teamSolveList as $teamSolve)
     {
         echo "<option value =$teamSolve->team_id>$teamSolve->team_name</option>";
     }
    ?></select></label><br>
    <label >สถานะของปัญหา<select name="solveS_id">
    <?php 
     foreach($problemStatusList as $problemStatus)
     {
         echo "<option value =$problemStatus->solveS_id>$problemStatus->solveS_status</option>";
     }
    ?></select></label><br>
    <input type="hidden" name="controller" value="problem">
    <button type="submit" name= "action" value="indexProblem">Back</button>
    <button type="submit" name= "action" value="addProblem">Save</button>
</form>