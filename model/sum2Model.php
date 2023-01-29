<?php
class sum2Model{
    public $officer_id,$officer_name,$officer_lastname,$sumteam,$success;
    public function __construct($officer_id,$officer_name,$officer_lastname,$sumteam,$success){
        $this->officer_id=$officer_id;
        $this->officer_name=$officer_name;
        $this->officer_lastname=$officer_lastname;
        $this->sumteam=$sumteam;
        $this->success=$success;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM (SELECT officer_id,COUNT(team_id) as sumteam FROM team_namesolve GROUP BY officer_id) as A NATURAL JOIN (SELECT tn.officer_id,IF(q1.s>0,q1.s,0) as success FROM team_namesolve as tn LEFT JOIN (SELECT officer_id,COUNT(*) as s FROM team_namesolve NATURAL JOIN problem_solve as ps WHERE solveS_id=1 GROUP BY officer_id) as q1 ON tn.officer_id=q1.officer_id GROUP BY tn.officer_id) as B NATURAL JOIN officer");
        while($my_row=$result->fetch_assoc()){
            $officer_id=$my_row['officer_id'];
            $officer_name=$my_row['officer_name'];
            $officer_lastname=$my_row['officer_lastname'];
            $sumteam=$my_row['sumteam'];
            $success=$my_row['success'];
            $sum2List[] = new sum2Model($officer_id,$officer_name,$officer_lastname,$sumteam,$success);
        }
        require("connection_close.php");
        return $sum2List;
    }

}
?>