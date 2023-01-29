<form action="" method="get">
<label >ทีมที่แก้ไข<select name="team_id">
    <?php 
     foreach($teamSolveList as $teamSolve)
     {
         echo "<option value =$teamSolve->team_id>$teamSolve->team_name</option>";
     }
    ?></select></label><br>
    <label >ชื่อ<select name="officer_id">
    <?php 
     foreach($officerList as $officer)
     {
         echo "<option value =$officer->officer_id>$officer->officer_name $officer->officer_lastname</option>";
     }
    ?></select></label><br>
   
    <input type="hidden" name="controller" value="member">
    <button type="submit" name= "action" value="indexMember">Back</button>
    <button type="submit" name= "action" value="addMember">Save</button>
</form>