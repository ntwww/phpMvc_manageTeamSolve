<?php 
class problem_solve{
    public $solve_id,
    $solve_date,
    $solve_time,
    $solve_name,
    $solve_detail,
    $solve_yesorno,
    $mo_list_problem,
    $mo_id;
    public function __construct($solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_list_problem,$mo_id)
    {
        $this->solve_id=$solve_id;
        $this->solve_date=$solve_date;
        $this->solve_time=$solve_time;
        $this->solve_name=$solve_name;
        $this->solve_detail=$solve_detail;
        $this->solve_yesorno=$solve_yesorno;
        $this->mo_list_problem=$mo_list_problem;
        $this->mo_id=$mo_id;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT solve_id,solve_date,solve_time,solve_name,mo_list_problem,solve_detail,solve_yesorno,m.mo_id 
        FROM problem_solve as p INNER JOIN management_officer as m ON p.mo_id = m.mo_id 
        where m.mo_problem like '%พบ%';");
        while($my_row=$result->fetch_assoc()){
            $solve_id=$my_row['solve_id'];
            $solve_date=$my_row['solve_date'];
            $solve_time=$my_row['solve_time'];
            $solve_name=$my_row['solve_name'];
            $solve_detail=$my_row['solve_detail'];
            $solve_yesorno=$my_row['solve_yesorno'];
            $mo_list_problem=$my_row['mo_list_problem'];
            $mo_id=$my_row['mo_id'];
            $solvelist[] = new problem_solve($solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_list_problem,$mo_id);
        }
        require("connection_close.php");
        return $solvelist;
    }
    public static function add($solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_id){
        require("connection_connect.php");
        $result = $conn->query("INSERT INTO `problem_solve` (`solve_id`, `solve_date`, `solve_time`, `solve_name`, `solve_detail`, `solve_yesorno`, `mo_id`) 
        VALUES ('$solve_id', '$solve_date', '$solve_time', '$solve_name', '$solve_detail', '$solve_yesorno', '$mo_id');");
        require ("connection_close.php");
     }
     public static function search($key){
        require("connection_connect.php");
        echo $key;
        $sql = "SELECT solve_id,solve_date,solve_time,solve_name,mo_list_problem,solve_detail,solve_yesorno,m.mo_id 
        FROM problem_solve as p INNER JOIN management_officer as m ON p.mo_id = m.mo_id 
        where m.mo_problem like '%พบ%'and (solve_id like '%$key%' or solve_date like '%$key%' or solve_time like '%$key%' or solve_name like 
        '%$key%' or solve_detail like '%$key%'or solve_yesorno)";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc())
        {
            $solve_id=$my_row['solve_id'];
            $solve_date=$my_row['solve_date'];
            $solve_time=$my_row['solve_time'];
            $solve_name=$my_row['solve_name'];
            $solve_detail=$my_row['solve_detail'];
            $solve_yesorno=$my_row['solve_yesorno'];
            $mo_list_problem=$my_row['mo_list_problem'];
            $mo_id=$my_row['mo_id'];
            $solvelist[] = new problem_solve($solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_list_problem,$mo_id);
        }
        require("connection_close.php");
        return $solvelist;

     }
     public  static function get($id){
        require("connection_connect.php");
        $result=$conn->query("SELECT solve_id,solve_date,solve_time,solve_name,mo_list_problem,solve_detail,solve_yesorno,m.mo_id
        FROM problem_solve as p INNER JOIN management_officer as m ON p.mo_id = m.mo_id
        where m.mo_problem like '%พบ%'and solve_id='$id' ");
        while($my_row=$result->fetch_assoc()){
            $solve_id=$my_row['solve_id'];
            $solve_date=$my_row['solve_date'];
            $solve_time=$my_row['solve_time'];
            $solve_name=$my_row['solve_name'];
            $solve_detail=$my_row['solve_detail'];
            $solve_yesorno=$my_row['solve_yesorno'];
            $mo_id=$my_row['mo_id'];
            $mo_list_problem=$my_row['mo_list_problem'];
            require ("connection_close.php");
            return new problem_solve($solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_list_problem,$mo_id);
        }
     }
     public static function update($id,$solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_id){
        
        require("connection_connect.php");
        $result = $conn->query("UPDATE `problem_solve` SET `solve_id` = '$solve_id', `solve_date` = '$solve_date', `solve_time` = '$solve_time', `solve_name` = '$solve_name', `solve_detail` = '$solve_detail', `solve_yesorno` = '$solve_yesorno' ,`mo_id`='$mo_id' 
        WHERE `problem_solve`.`solve_id` = $id;");

        require("connection_close.php");
     }
     public static function delete($id){
        require("connection_connect.php");
        $result = $conn->query("DELETE from problem_solve WHERE solve_id = '$id'");
        require ("connection_close.php");
        return "delete success $result rows";
    }


}