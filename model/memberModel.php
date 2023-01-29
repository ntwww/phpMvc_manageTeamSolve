<?php
class memberModel{
    public $teamn_id;
    public $team_id;
    public $team_name;
    public $officer_id ;
    public $officer_name;
    public $officer_lastname;
    public function __construct($teamn_id,$officer_id,$team_id,$team_name,$officer_name,$officer_lastname){
        $this->teamn_id=$teamn_id;
        $this->officer_id=$officer_id;
        $this->team_id=$team_id;
        $this->officer_name=$officer_name;
        $this->officer_lastname=$officer_lastname;
        $this->team_name=$team_name;
    }
    public static function getAll(){
        require("connection_connect.php");
        $result=$conn->query("SELECT * 
        FROM (team_solve as t INNER JOIN team_namesolve as n on t.team_id = n.team_id) INNER JOIN officer as o ON n.officer_id = o.officer_id WHERE 1 
        ORDER BY t.team_id,officer_name;");
        while($my_row=$result->fetch_assoc()){
            $teamn_id=$my_row['teamn_id'];
            $officer_id=$my_row['officer_id'];
            $officer_name=$my_row['officer_name'];
            $officer_lastname=$my_row['officer_lastname'];
            $team_id=$my_row['team_id'];
            $team_name=$my_row['team_name'];
            $memberList[] = new memberModel($teamn_id,$officer_id,$team_id,$team_name,$officer_name,$officer_lastname);
        }
        require("connection_close.php");
        return $memberList;
    }
    public static function delete($id){
        require("connection_connect.php");
        $result = $conn->query("DELETE from team_namesolve WHERE teamn_id = '$id'");
        
        require ("connection_close.php");
        return "delete success $result rows";
    }
    public static function add($officer_id,$team_id){
        require("connection_connect.php");
        $result = $conn->query("INSERT INTO `team_namesolve` (`teamn_id`, `officer_id`, `team_id`) VALUES (NULL, '$officer_id', '$team_id');");
        require ("connection_close.php");
        return "add success $result rows";
     }
     public static function search($key){
        require("connection_connect.php");
        $result=$conn->query("SELECT * FROM (team_solve as t INNER JOIN team_namesolve as n on t.team_id = n.team_id) INNER JOIN officer as o ON n.officer_id = o.officer_id 
        WHERE teamn_id like '%$key%' OR officer_name like '%$key%' OR officer_lastname like '%$key%' OR team_name like '%$key%'
        ORDER BY t.team_id,officer_name;");
        while($my_row=$result->fetch_assoc()){
            $teamn_id=$my_row['teamn_id'];
            $officer_id=$my_row['officer_id'];
            $officer_name=$my_row['officer_name'];
            $officer_lastname=$my_row['officer_lastname'];
            $team_id=$my_row['team_id'];
            $team_name=$my_row['team_name'];
            $memberList[] = new memberModel($teamn_id,$officer_id,$team_id,$team_name,$officer_name,$officer_lastname);
        }
        require ("connection_close.php");
        return $memberList;
     }
    public static function get($id){
        require("connection_connect.php");
        $result=$conn->query("SELECT *
         FROM (team_solve as t INNER JOIN team_namesolve as n on t.team_id = n.team_id) INNER JOIN officer as o ON n.officer_id = o.officer_id 
        WHERE teamn_id = '$id'
        ORDER BY t.team_id,officer_name;");
        while($my_row=$result->fetch_assoc()){
            $teamn_id=$my_row['teamn_id'];
            $officer_id=$my_row['officer_id '];
            $officer_name=$my_row['officer_name'];
            $officer_lastname=$my_row['officer_lastname'];
            $team_id=$my_row['team_id'];
            $team_name=$my_row['team_name'];
            require ("connection_close.php");
            return new memberModel($teamn_id,$officer_id,$team_id,$team_name,$officer_name,$officer_lastname);
        }
    }
    public static function update($teamn_id,$team_id){
 
        require("connection_connect.php");
        $result=$conn->query("UPDATE team_namesolve SET team_id = '$team_id' WHERE teamn_id = '$teamn_id'");
        require ("connection_close.php");
        return "update success $result rows";
    }
}
