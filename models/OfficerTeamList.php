<?php 
    class OfficerTeamList{
        public $officerTeamListID;

        public function __construct($officerTeamListID){
            $this->officerTeamListID = $officerTeamListID;
        }

        public static function getAll(){
            require("connection_connect.php");
            $officcerTeamList=[];
            $sql = "SELECT * FROM OfficerTeamList";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {   
                $officerTeamListID = $my_row["officerTeamListID"];
                $officcerTeamList[]= new OfficerTeamList($officerTeamListID);
                
            }
            require("connection_close.php");
            return $officcerTeamList;
        }

        public static function getById($id){
            require("connection_connect.php");
            $sql = "SELECT * FROM OfficerTeamList WHERE OfficerTeamList.officerTeamListID = '$id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc(); 
            $officerTeamListID = $my_row["officerTeamListID"];
            require("connection_close.php");
            return new OfficerTeamList($officerTeamListID);;
        }

        public static function addList(){
            require("connection_connect.php");
            $sql = "INSERT INTO `OfficerTeamList` (`officerTeamListID`) VALUES (NULL)";
            $result = $conn->query($sql);
            $sql2 = "SELECT MAX(officerteamlist.officerTeamListID) as Maximum FROM `OfficerTeamList`";
            $result2 = $conn->query($sql2);
            $my_row = $result2->fetch_assoc();
            $id = $my_row['Maximum'];
            require("connection_close.php");
            return $id;

        }
        public static function delete($id){
            require("connection_connect.php");
            $sql = "DELETE FROM OfficerTeamList WHERE OfficerTeamList.officerTeamListID = '$id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
    
?>
