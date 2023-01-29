<?php class OfficerTeamDetail{
        public $officerTeamDetailID;
        public $officerID,$officerTitle,$firstName,$lastName;
        public $officerTeamListID;
        public $officerTeamPosition;
        
        public function __construct($officerTeamDetailID,$officerID,$officerTeamListID,$officerTitle,$firstName,$lastName,$officerTeamPosition){
            $this->officerTeamDetailID = $officerTeamDetailID;
            $this->officerID = $officerID;
            $this->officerTeamListID = $officerTeamListID;
            $this->officerTitle = $officerTitle;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->officerTeamPosition = $officerTeamPosition;
        }

        public static function getAll(){
            $teamLists = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM OfficerTeamList Natural Join OfficerTeamDetail Natural Join Officer";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $officerTeamDetailID = $my_row["officerTeamDetailID"];
                $officerID = $my_row["officerID"];
                $officerTeamListID = $my_row["officerTeamListID"];
                $officerTitle = $my_row["officerTitle"];
                $lastName = $my_row["lastName"];
                $firstName = $my_row["firstName"];
                $officerTeamPosition = $my_row["officerTeamPosition"];
                $teamLists[] = new OfficerTeamDetail($officerTeamDetailID,$officerID,$officerTeamListID,$officerTitle,$firstName,$lastName,$officerTeamPosition);
            }
            require("connection_close.php");
            return $teamLists;
        }

        public static function getEnum(){
            $enumlists = [];
            require("connection_connect.php");
            $sql = "SELECT DISTINCT OfficerTeamDetail.officerTeamPosition FROM OfficerTeamDetail";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $enumlists[] = $my_row["officerTeamPosition"];
            }
            require("connection_close.php");
            return $enumlists;
        }

        public static function search($key){
            $teamLists = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM OfficerTeamList Natural Join OfficerTeamDetail Natural Join Officer WHERE (Officer.officerID LIKE'%$key%' OR Officer.firstName LIKE'%$key%'OR Officer.lastName LIKE'%$key%'OR OfficerTeamList.officerTeamListID LIKE '%$key%' )";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $officerTeamDetailID = $my_row["officerTeamDetailID"];
                $officerID = $my_row["officerID"];
                $officerTeamListID = $my_row["officerTeamListID"];
                $officerTitle = $my_row["officerTitle"];
                $lastName = $my_row["lastName"];
                $firstName = $my_row["firstName"];
                $officerTeamPosition = $my_row["officerTeamPosition"];
                $teamLists[] = new OfficerTeamDetail($officerTeamDetailID,$officerID,$officerTeamListID,$officerTitle,$firstName,$lastName,$officerTeamPosition);
            }
            require("connection_close.php");
            return $teamLists;
        }

        public static function getById($id){
            $teamLists=[];
            require("connection_connect.php");
            $sql = "SELECT * FROM OfficerTeamList Natural Join OfficerTeamDetail Natural Join Officer WHERE OfficerTeamDetail.officerTeamListID='$id'";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $officerTeamDetailID = $my_row["officerTeamDetailID"];
                $officerID = $my_row["officerID"];
                $officerTeamListID = $my_row["officerTeamListID"];
                $officerTitle = $my_row["officerTitle"];
                $lastName = $my_row["lastName"];
                $firstName = $my_row["firstName"];
                $officerTeamPosition = $my_row["officerTeamPosition"];
                $teamLists[] = new OfficerTeamDetail($officerTeamDetailID,$officerID,$officerTeamListID,$officerTitle,$firstName,$lastName,$officerTeamPosition);
            }
            require("connection_close.php");
            return $teamLists;
        }

        public static function add($officerID,$officerTeamListID,$position,$officerID1,$position1,$officerID2,$position2){
            require("connection_connect.php");
            $sql = "INSERT INTO `OfficerTeamDetail` (`officerID`, `officerTeamListID`, `officerTeamPosition`) VALUES ('$officerID','$officerTeamListID','$position'),('$officerID1','$officerTeamListID','$position1'),('$officerID2','$officerTeamListID','$position2')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result row";

        }

    }
?>