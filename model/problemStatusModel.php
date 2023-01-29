<?php
class problemStatusModel{
    public $solveS_id,$solveS_status;
    public function __construct($solveS_id,$solveS_status){
        $this->solveS_id=$solveS_id;
        $this->solveS_status=$solveS_status;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM `problem_solvestatus`");
        while($my_row=$result->fetch_assoc()){
            $solveS_id=$my_row['solveS_id'];
            $solveS_status=$my_row['solveS_status'];
            $problemStatusList[] = new problemStatusModel($solveS_id,$solveS_status);
        }
        require("connection_close.php");
        return $problemStatusList;
    }
}
?>