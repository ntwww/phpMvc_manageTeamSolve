<?php
class problemModel
{
    public $mo_id, $solve_id, $team_id, $solveS_id, $pl_id,$ps_id,
        $solve_date, $solve_time, $mo_report_data, $solve_detail, $team_name, $solveS_status, $pl_detail;
    public function __construct($mo_id, $solve_id, $team_id, $solveS_id, $solve_date, $solve_time, $mo_report_data, $solve_detail, $team_name, $solveS_status, $pl_id, $pl_detail,$ps_id)
    {
        $this->mo_id = $mo_id;
        $this->solve_id = $solve_id;
        $this->team_id = $team_id;
        $this->solveS_id = $solveS_id;
        $this->pl_id = $pl_id;
        $this->solve_date = $solve_date;
        $this->solve_time = $solve_time;
        $this->mo_report_data = $mo_report_data;
        $this->solve_detail = $solve_detail;
        $this->team_name = $team_name;
        $this->solveS_status = $solveS_status;
        $this->pl_detail = $pl_detail;
        $this->ps_id = $ps_id;
    }
    public static function getAll()
    {
        require("connection_connect.php");
        $result = $conn->query("SELECT * FROM (((problem_solve AS p INNER JOIN problem_solvestatus AS s on p.solveS_id = s.solveS_id ) 
        INNER JOIN management_officer AS m ON p.mo_id = m.mo_id)INNER JOIN team_solve as t ON t.team_id = p.team_id) 
        INNER JOIN problem_list as pl ON pl.pl_id=m.pl_id 
        ORDER by solve_date,solve_time");
        while ($my_row = $result->fetch_assoc()) {
            $mo_id = $my_row['mo_id'];
            $solve_id = $my_row['solve_id'];
            $team_id = $my_row['team_id'];
            $solveS_id = $my_row['solveS_id'];
            $solve_date = $my_row['solve_date'];
            $solve_time = $my_row['solve_time'];
            $mo_report_data = $my_row['mo_report_data'];
            $solve_detail = $my_row['solve_detail'];
            $team_name = $my_row['team_name'];
            $solveS_status = $my_row['solveS_status'];
            $pl_id = $my_row['pl_id'];
            $pl_detail = $my_row['pl_detail'];
            $ps_id = $my_row['ps_id'];

            $problemList[] = new problemModel($mo_id, $solve_id, $team_id, $solveS_id, $solve_date, $solve_time, $mo_report_data, $solve_detail, $team_name, $solveS_status, $pl_id, $pl_detail,$ps_id);
        }
        require("connection_close.php");
        return $problemList;
    }

    public static function add($solve_date, $solve_time, $mo_id, $solve_detail, $team_id, $solveS_id)
    {
        require("connection_connect.php");
        $result = $conn->query("INSERT INTO `problem_solve` (`solve_id`, `solve_date`, `solve_time`, `solve_detail`, `solveS_id`, `mo_id`, `team_id`) VALUES (NULL, '$solve_date', '$solve_time', '$solve_detail', '$solveS_id', '$mo_id', '$team_id');");
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $result = $conn->query("SELECT * FROM (((problem_solve AS p INNER JOIN problem_solvestatus AS s on p.solveS_id = s.solveS_id )
        INNER JOIN management_officer AS m ON p.mo_id = m.mo_id)INNER JOIN team_solve as t ON t.team_id = p.team_id)
        INNER JOIN problem_list as pl ON pl.pl_id=m.pl_id
        WHERE p.mo_id like '%$key%' OR solve_date like '%$key%' OR solve_time like '%$key%' OR mo_report_data like '%$key%' OR pl_detail like '%$key%' OR solve_detail like '%$key%' OR solveS_status like '%$key%' OR team_name like '%$key%' 
        ORDER by solve_date,solve_time;");
        while ($my_row = $result->fetch_assoc()) {
            $mo_id = $my_row['mo_id'];
            $solve_id = $my_row['solve_id'];;
            $team_id = $my_row['team_id'];
            $solveS_id = $my_row['solveS_id'];
            $solve_date = $my_row['solve_date'];
            $solve_time = $my_row['solve_time'];
            $mo_report_data = $my_row['mo_report_data'];
            $solve_detail = $my_row['solve_detail'];
            $team_name = $my_row['team_name'];
            $solveS_status = $my_row['solveS_status'];
            $pl_id = $my_row['pl_id'];
            $pl_detail = $my_row['pl_detail'];
            $ps_id = $my_row['ps_id'];
            $problemList[] = new problemModel($mo_id, $solve_id, $team_id, $solveS_id, $solve_date, $solve_time, $mo_report_data, $solve_detail, $team_name, $solveS_status, $pl_id, $pl_detail,$ps_id);
        }
        require("connection_close.php");
        return $problemList;
    }
    public static function get($id)
    {
        require("connection_connect.php");
        $result = $conn->query("SELECT * FROM (((problem_solve AS p INNER JOIN problem_solvestatus AS s on p.solveS_id = s.solveS_id )
        INNER JOIN management_officer AS m ON p.mo_id = m.mo_id)INNER JOIN team_solve as t ON t.team_id = p.team_id)
        INNER JOIN problem_list as pl ON pl.pl_id=m.pl_id
        WHERE solve_id = '$id'
        ORDER by solve_date,solve_time");
        while ($my_row = $result->fetch_assoc()) {
            $mo_id = $my_row['mo_id'];
            $solve_id = $my_row['solve_id'];
            $team_id = $my_row['team_id'];
            $solveS_id = $my_row['solveS_id'];
            $solve_date = $my_row['solve_date'];
            $solve_time = $my_row['solve_time'];
            $mo_report_data = $my_row['mo_report_data'];
            $solve_detail = $my_row['solve_detail'];
            $team_name = $my_row['team_name'];
            $solveS_status = $my_row['solveS_status'];
            $pl_id = $my_row['pl_id'];
            $pl_detail = $my_row['pl_detail'];
            $ps_id = $my_row['ps_id'];
            require("connection_close.php");
            return new problemModel($mo_id, $solve_id, $team_id, $solveS_id, $solve_date, $solve_time, $mo_report_data, $solve_detail, $team_name, $solveS_status, $pl_id, $pl_detail,$ps_id);
        }
    }
    public static function update($solve_id, $solve_date, $solve_time, $solve_detail, $solveS_id, $team_id)
    {
        require("connection_connect.php");
        $result = $conn->query("UPDATE `problem_solve` SET `solve_date` = '$solve_date', `solve_time` = '$solve_time', `solve_detail` = '$solve_detail', `solveS_id` = '$solveS_id', `team_id` = '$team_id' WHERE `problem_solve`.`solve_id` = '$solve_id';");
        require("connection_close.php");
    }
    public static function delete($id)
    {
        echo $id;
        require("connection_connect.php");
        $result = $conn->query("DELETE FROM problem_solve WHERE problem_solve.solve_id = '$id';");
        require("connection_close.php");
        return "delete success $result rows";
    }
}
