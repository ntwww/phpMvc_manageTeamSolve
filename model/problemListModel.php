<?php
class problemListModel{
    public $pl_id
    ,$pl_detail;
   
    public function __construct($pl_id,$pl_detail){
        $this->pl_id=$pl_id;
        $this->pl_detail=$pl_detail;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM `problem_list`");
        while($my_row=$result->fetch_assoc()){
            $pl_id=$my_row['pl_id'];
            $pl_detail=$my_row['pl_detail'];;
            $problemXXX[] = new problemListModel($pl_id,$pl_detail);
        }
        require("connection_close.php");
        return $problemXXX;
    }
}
?>