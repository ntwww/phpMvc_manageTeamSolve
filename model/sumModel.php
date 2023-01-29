<?php
class sumModel{
    public $team_id,$nubteam,$team_name;
    public function __construct($team_id,$nubteam,$team_name){
        $this->team_id=$team_id;
        $this->nubteam=$nubteam;
        $this->team_name=$team_name;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT team_id,COUNT(team_id) AS nubteam,team_solve.team_name FROM team_namesolve NATURAL JOIN team_solve GROUP by team_id,team_solve.team_name");
        while($my_row=$result->fetch_assoc()){
            $team_id=$my_row['team_id'];
            $nubteam=$my_row['nubteam'];
            $team_name=$my_row['team_name'];
            $sumList[] = new sumModel($team_id,$nubteam,$team_name);
        }
        require("connection_close.php");
        return $sumList;
    }
    // public static function search($key){
    //     require("connection_connect.php");
    //     $result=$conn->query("SELECT team_id,COUNT(team_id) AS nubteam,team_solve.team_name 
    //     FROM team_namesolve NATURAL JOIN team_solve
    //     WHERE team_name like '%$key%' OR nubteam like '%$key%';
    //     GROUP by team_id,team_solve.team_name;");
    //     while($my_row=$result->fetch_assoc()){
    //         $team_id=$my_row['team_id'];
    //         $nubteam=$my_row['nubteam'];
    //         $team_name=$my_row['team_name'];
    //         $sumList[] = new sumModel($team_id,$nubteam,$team_name);
    //     }
    //     require ("connection_close.php");
    //     return $sumList;
    //  }
}
?>