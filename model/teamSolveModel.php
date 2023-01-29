<?php
class teamSolveModel{
    public $team_id,
    $team_name;
    public function __construct($team_id,$team_name){
        $this->team_id=$team_id;
        $this->team_name=$team_name;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM `team_solve`");
        while($my_row=$result->fetch_assoc()){
            $team_id=$my_row['team_id'];
            $team_name=$my_row['team_name'];
            $teamSolveList[] = new teamSolveModel($team_id,$team_name);
        }
        require("connection_close.php");
        return $teamSolveList;
        
    }
}
?>