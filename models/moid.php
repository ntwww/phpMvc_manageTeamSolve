<?php
class moid{
    public $mo_list_problem,
    $mo_id;
    public function __construct($mo_list_problem,$mo_id){
        $this->mo_list_problem=$mo_list_problem;
        $this->mo_id=$mo_id;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM management_officer");
        while($my_row=$result->fetch_assoc()){
            $mo_list_problem=$my_row['mo_list_problem'];
            $mo_id=$my_row['mo_id'];
            $molist[] = new moid($mo_list_problem,$mo_id);
        }
        require("connection_close.php");
        return $molist;
    }
}
?>