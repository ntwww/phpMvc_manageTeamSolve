<?php
class managementModel{
    public $mo_id
    ,$mo_report_data
    ,$mo_visit_date
    ,$ps_id
    ;
    public function __construct($mo_id,$mo_report_data,$mo_visit_date,$ps_id){
        $this->mo_id=$mo_id;
        $this->mo_report_data=$mo_report_data;
        $this->mo_visit_date=$mo_visit_date;
        $this->ps_id=$ps_id;

    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM `management_officer`");
        while($my_row=$result->fetch_assoc()){
            $mo_id=$my_row['mo_id'];
            $mo_report_data=$my_row['mo_report_data'];
            $mo_visit_date=$my_row['mo_visit_date'];
            $ps_id=$my_row['ps_id'];
            $managementList[] = new managementModel($mo_id,$mo_report_data,$mo_visit_date,$ps_id);
        }
        require("connection_close.php");
        return $managementList;
    }
}
?>