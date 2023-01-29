<?php
    class Survey{
        public $officerTeamListID,$officerTeamPosition;
        public $officerTitle,$firstName,$lastName;
        public $surveyListID,$surveyStatus,$surveyDate,$surveyIssue,$surveyIssueDetail;
        public $riverName;
        public $subDistrictName;
        public $districtName;
        public $provinceName;

        public function __construct($officerTeamListID,$officerTeamPosition,$officerTitle,$firstName,$lastName,$surveyListID,$surveyStatus,$surveyDate,$surveyIssue,$surveyIssueDetail,$riverName,$subDistrictName,$districtName,$provinceName)
        {
            $this->officerTeamListID = $officerTeamListID;
            $this->officerTeamPosition = $officerTeamPosition;
            $this->officerTitle = $officerTitle;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->surveyListID = $surveyListID;
            $this->surveyStatus = $surveyStatus;
            $this->surveyDate = $surveyDate;
            $this->surveyIssue = $surveyIssue;
            $this->surveyIssueDetail = $surveyIssueDetail;
            $this->riverName = $riverName;
            $this->subDistrictName = $subDistrictName;
            $this->districtName = $districtName;
            $this->provinceName = $provinceName;
        }

        public static function getAll()
        {
            $surveyList = [];
            require("connection_connect.php");
            $sql = "SELECT * 
            FROM SurveyList NATURAL JOIN WaterBarrierLine NATURAL JOIN RiverSubDistrict  NATURAL JOIN SubDistrict NATURAL JOIN River NATURAL JOIN District NATURAL JOIN Province INNER JOIN
            (SELECT OfficerTeamDetail.officerTeamListID,Officer.officerID,Officer.officerTitle,Officer.firstName,Officer.lastName,OfficerTeamDetail.officerTeamPosition  
            FROM OfficerTeamDetail NATURAL JOIN Officer
            GROUP BY OfficerTeamDetail.officerTeamListID,Officer.officerID,Officer.officerTitle,Officer.firstName,Officer.lastName,OfficerTeamDetail.officerTeamPosition
            HAVING OfficerTeamDetail.officerTeamPosition='Leader')as leader
            ON SurveyList.officerTeamListID=leader.officerTeamListID
            ORDER BY `SurveyList`.`surveyListID` DESC";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $officerTeamListID = $my_row["officerTeamListID"];
                $officerTeamPosition = $my_row["officerTeamPosition"];
                $officerTitle = $my_row["officerTitle"];
                $firstName = $my_row["firstName"];
                $lastName = $my_row["lastName"];
                $surveyListID = $my_row["surveyListID"];
                $surveyStatus = $my_row["surveyStatus"];
                $surveyDate = $my_row["surveyDate"];
                $surveyIssue = $my_row["surveyIssue"];
                $surveyIssueDetail = $my_row["surveyIssueDetail"];
                $riverName = $my_row["riverName"];
                $districtName = $my_row["districtName"];
                $subDistrictName = $my_row["subDistrictName"];
                $provinceName = $my_row["provinceName"];
                $surveyList[] = new Survey($officerTeamListID,$officerTeamPosition,$officerTitle,$firstName,$lastName,$surveyListID,$surveyStatus,$surveyDate,$surveyIssue,$surveyIssueDetail,$riverName,$subDistrictName,$districtName,$provinceName);
            }
            require("connection_close.php");
            return $surveyList;
        }

        public static function getById($id)
        {
            $surveyList;
            require("connection_connect.php");
            $sql = "SELECT * 
            FROM SurveyList NATURAL JOIN WaterBarrierLine NATURAL JOIN RiverSubDistrict  NATURAL JOIN SubDistrict NATURAL JOIN River NATURAL JOIN District NATURAL JOIN Province INNER JOIN
            (SELECT OfficerTeamDetail.officerTeamListID,Officer.officerID,Officer.officerTitle,Officer.firstName,Officer.lastName,OfficerTeamDetail.officerTeamPosition  
            FROM OfficerTeamDetail NATURAL JOIN Officer
            GROUP BY OfficerTeamDetail.officerTeamListID,Officer.officerID,Officer.officerTitle,Officer.firstName,Officer.lastName,OfficerTeamDetail.officerTeamPosition
            HAVING OfficerTeamDetail.officerTeamPosition='Leader')as leader
            ON SurveyList.officerTeamListID=leader.officerTeamListID
            WHERE SurveyList.surveyListID = '$id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $officerTeamListID = $my_row["officerTeamListID"];
            $officerTeamPosition = $my_row["officerTeamPosition"];
            $officerTitle = $my_row["officerTitle"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $surveyListID = $my_row["surveyListID"];
            $surveyStatus = $my_row["surveyStatus"];
            $surveyDate = $my_row["surveyDate"];
            $surveyIssue = $my_row["surveyIssue"];
            $surveyIssueDetail = $my_row["surveyIssueDetail"];
            $riverName = $my_row["riverName"];
            $districtName = $my_row["districtName"];
            $subDistrictName = $my_row["subDistrictName"];
            $provinceName = $my_row["provinceName"];
            require("connection_close.php");
            return new Survey($officerTeamListID,$officerTeamPosition,$officerTitle,$firstName,$lastName,$surveyListID,$surveyStatus,$surveyDate,$surveyIssue,$surveyIssueDetail,$riverName,$subDistrictName,$districtName,$provinceName);
        }

        public static function getEnum(){
            $enumlists = [];
            require("connection_connect.php");
            $sql = "SELECT DISTINCT SurveyList.surveyStatus FROM SurveyList";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $enumlists[] = $my_row["surveyStatus"];
            }
            require("connection_close.php");
            return $enumlists;
        }

        public static function add($officerTeamListID,$surveyStatus,$surveyDate,$surveyIssue,$surveyIssueDetail,$barrierID){
            require("connection_connect.php");
            $sql = "INSERT INTO `SurveyList` (`officerTeamListID`, `surveyStatus`, `surveyDate`, `surveyIssue`,`surveyIssueDetail`,`barrierID`) VALUES ('$officerTeamListID','$surveyStatus','$surveyDate','$surveyIssue','$surveyIssueDetail','$barrierID')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result row";

        }

        public static function update($id,$surveyIssue,$surveyIssueDetail){
            require("connection_connect.php");
            $sql = "UPDATE SurveyList SET SurveyList.surveyIssue='$surveyIssue',SurveyList.surveyIssueDetail='$surveyIssueDetail' WHERE SurveyList.surveyListID='$id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function search($key)
        {
            $surveyList = [];
            require("connection_connect.php");
            $sql = "SELECT * 
            FROM SurveyList NATURAL JOIN WaterBarrierLine NATURAL JOIN RiverSubDistrict  NATURAL JOIN SubDistrict NATURAL JOIN River NATURAL JOIN District NATURAL JOIN Province INNER JOIN
            (SELECT OfficerTeamDetail.officerTeamListID as oTLID,Officer.officerID as ofID,Officer.officerTitle as oT,Officer.firstName as oFN,Officer.lastName as oLN,OfficerTeamDetail.officerTeamPosition as oTP  
            FROM OfficerTeamDetail NATURAL JOIN Officer
            GROUP BY OfficerTeamDetail.officerTeamListID,Officer.officerID,Officer.officerTitle,Officer.firstName,Officer.lastName,OfficerTeamDetail.officerTeamPosition
            HAVING oTP='Leader')as leader
            ON SurveyList.officerTeamListID=leader.oTLID
            WHERE (SurveyList.surveyListID Like '%$key%' OR SubDistrict.subDistrictName LIKE '%$key%' OR District.districtName LIKE '%$key%' OR Province.provinceName LIKE '%$key%' OR leader.oFN LIKE '%$key%' 
            OR leader.oLN LIKE '%$key%' OR leader.oFN LIKE '%$key%' OR SurveyList.surveyStatus Like '%$key%')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $officerTeamListID = $my_row["oTLID"];
                $officerTeamPosition = $my_row["oTP"];
                $officerTitle = $my_row["oT"];
                $firstName = $my_row["oFN"];
                $lastName = $my_row["oLN"];
                $surveyListID = $my_row["surveyListID"];
                $surveyStatus = $my_row["surveyStatus"];
                $surveyDate = $my_row["surveyDate"];
                $surveyIssue = $my_row["surveyIssue"];
                $surveyIssueDetail = $my_row["surveyIssueDetail"];
                $riverName = $my_row["riverName"];
                $districtName = $my_row["districtName"];
                $subDistrictName = $my_row["subDistrictName"];
                $provinceName = $my_row["provinceName"];
                $surveyList[] = new Survey($officerTeamListID,$officerTeamPosition,$officerTitle,$firstName,$lastName,$surveyListID,$surveyStatus,$surveyDate,$surveyIssue,$surveyIssueDetail,$riverName,$subDistrictName,$districtName,$provinceName);
            }
            require("connection_close.php");
            return $surveyList;
        }

    }
?>