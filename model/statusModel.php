<?php
class statusModel{
    public $solve_id,$mo_id,$solveS_id;
    public $solve_detail,
    $mo_visit_date,
    $solve_date,
    $mo_report_data,
    $solveS_status,
    $solve_time;
    public function __construct($solve_id,$mo_id,$solveS_id,$solve_detail,$mo_visit_date,$solve_date,$mo_report_data,$solveS_status,$solve_time){
        $this->solve_id=$solve_id;
        $this->mo_id=$mo_id;
        $this->solveS_id=$solveS_id;
        $this->solve_detail=$solve_detail;
        $this->mo_visit_date=$mo_visit_date;
        $this->solve_date=$solve_date;
        $this->mo_report_data=$mo_report_data;
        $this->solveS_status=$solveS_status;
        $this->solve_time=$solve_time;

    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT mo_id,mo_visit_date,maxDate,solve_time,mo_report_data,solve_detail,solveS_status 
        FROM (SELECT solve_id,solve_detail,solveS_id,mo_id,team_id,maxDate,solve_time 
        FROM (SELECT MAX(solve_id)AS maxId,MAX(solve_date)AS maxDate FROM problem_solve GROUP BY mo_id) AS x INNER JOIN problem_solve ON x.maxId = solve_id)AS X NATURAL JOIN problem_solvestatus NATURAL JOIN management_officer 
        ORDER by mo_id;");
        while($my_row=$result->fetch_assoc()){
            $solve_id=NULL;
            $mo_id=$my_row['mo_id'];
            $solveS_id=NULL;
            $solve_detail=$my_row['solve_detail'];
            $mo_visit_date=$my_row['mo_visit_date'];
            $solve_date=$my_row['maxDate'];
            $mo_report_data=$my_row['mo_report_data'];
            $solveS_status=$my_row['solveS_status'];
            $solve_time=$my_row['solve_time'];
            $statusList[] = new statusModel($solve_id,$mo_id,$solveS_id,$solve_detail,$mo_visit_date,$solve_date,$mo_report_data,$solveS_status,$solve_time);
        }
        require("connection_close.php");
        return $statusList;
    }
    public static function get($id){
        require("connection_connect.php");
        $result=$conn->query("SELECT mo_id,mo_visit_date,maxDate,solve_time,mo_report_data,solve_detail,solveS_status 
        FROM (SELECT solve_id,solve_detail,solveS_id,mo_id,team_id,maxDate,solve_time 
        FROM (SELECT MAX(solve_id)AS maxId,MAX(solve_date)AS maxDate FROM problem_solve GROUP BY mo_id) AS x INNER JOIN problem_solve ON x.maxId = solve_id)AS X NATURAL JOIN problem_solvestatus NATURAL JOIN management_officer 
        ORDER by mo_id
        WHERE solve_id = '$id';");
        while($my_row=$result->fetch_assoc()){
            $solve_id=$my_row['solve_id'];
            $mo_id=$my_row['mo_id'];
            $solveS_id=NULL;
            $solve_detail=$my_row['solve_detail'];
            $mo_visit_date=$my_row['mo_visit_date'];
            $solve_date=$my_row['Max(solve_date)'];
            $mo_report_data=$my_row['mo_report_data'];
            $solveS_status=$my_row['solveS_status'];
            $solve_time=$my_row['solve_time'];
            require ("connection_close.php");
            return new statusModel($solve_id,$mo_id,$solveS_id,$solve_detail,$mo_visit_date,$solve_date,$mo_report_data,$solveS_status,$solve_time);
        }
    }
    public static function search($key){
        require("connection_connect.php");
        $result=$conn->query("SELECT mo_id,mo_visit_date,maxDate,solve_time,mo_report_data,solve_detail,solveS_status 
        FROM (SELECT solve_id,solve_detail,solveS_id,mo_id,team_id,maxDate,solve_time 
        FROM (SELECT MAX(solve_id)AS maxId,MAX(solve_date)AS maxDate FROM problem_solve GROUP BY mo_id) AS x INNER JOIN problem_solve ON x.maxId = solve_id)AS X NATURAL JOIN problem_solvestatus NATURAL JOIN management_officer 
        where mo_id like '%$key%' OR mo_visit_date like '%$key%' OR maxDate like '%$key%' OR mo_report_data like '%$key%' OR solveS_status like '%$key%' OR solve_detail like '%$key%' OR solve_time like '%$key%'
        ORDER by mo_id;");
        while($my_row=$result->fetch_assoc()){
            $solve_id=NULL;
            $mo_id=$my_row['mo_id'];
            $solveS_id=NULL;
            $solve_detail=$my_row['solve_detail'];
            $mo_visit_date=$my_row['mo_visit_date'];
            $solve_date=$my_row['maxDate'];
            $mo_report_data=$my_row['mo_report_data'];
            $solveS_status=$my_row['solveS_status'];
            $solve_time=$my_row['solve_time'];
            $statusList[] = new statusModel($solve_id,$mo_id,$solveS_id,$solve_detail,$mo_visit_date,$solve_date,$mo_report_data,$solveS_status,$solve_time);
        }
        require ("connection_close.php");
        return $statusList;
     }
}
