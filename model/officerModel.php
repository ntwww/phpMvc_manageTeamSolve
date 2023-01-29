<?php
class officerModel{
    public $officer_id
    ,$officer_name
    ,$officer_lastname;
    public function __construct($officer_id,$officer_name,$officer_lastname){
        $this->officer_id=$officer_id;
        $this->officer_name=$officer_name;
        $this->officer_lastname=$officer_lastname;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM `officer`");
        while($my_row=$result->fetch_assoc()){
            $officer_id=$my_row['officer_id'];
            $officer_name=$my_row['officer_name'];
            $officer_lastname=$my_row['officer_lastname'];
            $officerlist[] = new officerModel($officer_id,$officer_name,$officer_lastname);
        }
        require("connection_close.php");
        return $officerlist;
    }
}
?>