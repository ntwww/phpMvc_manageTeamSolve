<?php 
    class Officer{
        public $officerID;
        public $agencyID,$agencyName,$districtAgencyID,$districtName;
        public $officerTitle;
        public $firstName;
        public $lastName;
        public $provinceName;


        public function __construct($officerID,$agencyID,$officerTitle,$firstName,$lastName,$agencyName,$districtName,$provinceName)
        {
            $this->officerID = $officerID;
            $this->agencyID = $agencyID;
            $this->officerTitle = $officerTitle;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->agencyName = $agencyName;
            $this->districtName = $districtName;
            $this->provinceName = $provinceName;
        }

        public static function getAll()
        {
            $officeList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Officer Natural Join DistrictAgency Natural Join Agency Natural Join District Natural Join Province ORDER BY `Officer`.`OfficerID` ASC";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
            $officerID = $my_row["officerID"];
            $agencyID = $my_row["agencyID"];
            $officerTitle = $my_row["officerTitle"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $agencyName = $my_row["agencyName"];
            $districtName = $my_row["districtName"];
            $provinceName = $my_row["provinceName"];
            $officeList[] = new Officer($officerID,$agencyID,$officerTitle,$firstName,$lastName,$agencyName,$districtName,$provinceName);
            }
            require("connection_close.php");
            return $officeList;
        }

        public static function getById($id){
            require("connection_connect.php");
            $sql = "SELECT * FROM Officer Natural Join DistrictAgency Natural Join Agency Natural Join District Natural Join Province WHERE Officer.officerID='$id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $officerID = $my_row["officerID"];
            $agencyID = $my_row["agencyID"];
            $officerTitle = $my_row["officerTitle"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $agencyName = $my_row["agencyName"];
            $districtName = $my_row["districtName"];
            $provinceName = $my_row["provinceName"];
            require("connection_close.php");
            return new Officer($officerID,$agencyID,$officerTitle,$firstName,$lastName,$agencyName,$districtName,$provinceName);
        }

        public static function getEnum(){
            $enumlists = [];
            require("connection_connect.php");
            $sql = "SELECT DISTINCT Officer.officerTitle FROM Officer";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $enumlists[] = $my_row["officerTitle"];
            }
            require("connection_close.php");
            return $enumlists;
        }

        public static function add($districtAgencyID,$officerTitle,$firstName,$lastName){
            require("connection_connect.php");
            $sql = "INSERT INTO `Officer` (`districtAgencyID`, `officerTitle`, `firstName`, `lastName`) VALUES ('$districtAgencyID','$officerTitle','$firstName','$lastName')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result row";

        }

        public static function search($key)
        {
            require("connection_connect.php");
            $sql = "SELECT * FROM Officer Natural Join DistrictAgency Natural Join Agency Natural Join District Natural Join Province WHERE (Officer.officerID LIKE'%$key%' OR Officer.firstName LIKE'%$key%'OR Officer.lastName LIKE'%$key%')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $officerID = $my_row['officerID'];
                $agencyID = $my_row['agencyID'];
                $officerTitle = $my_row["officerTitle"];
                $firstName = $my_row["firstName"];
                $lastName = $my_row["lastName"];
                $agencyName = $my_row["agencyName"];
                $districtName = $my_row["districtName"];
                $provinceName = $my_row["provinceName"];
                $officerList[] = new Officer($officerID,$agencyID,$officerTitle,$firstName,$lastName,$agencyName,$districtName,$provinceName);
            }
            require("connection_close.php");
            return $officerList;
        }

        public static function update($officerID,$officerTitle,$firstName,$lastName)
        {
            require("connection_connect.php");
            $sql = "UPDATE Officer SET Officer.officerTitle='$officerTitle',Officer.firstName='$firstName',Officer.lastName='$lastName' WHERE Officer.officerID='$officerID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($id){
            require("connection_connect.php");
            $sql = "DELETE FROM Officer WHERE Officer.officerID = '$id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
        
}
?>