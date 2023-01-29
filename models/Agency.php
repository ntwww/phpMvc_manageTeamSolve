<?php
    class Agency{
        public $agencyID;
        public $agencyName,$districtAgencyID,$districtID,$districtName;
        public $provinceName;


        public function __construct($agencyID,$agencyName,$districtAgencyID,$districtID,$districtName,$provinceName)
        {
            $this->agencyID = $agencyID;
            $this->agencyName = $agencyName;
            $this->districtAgencyID = $districtAgencyID;
            $this->districtID = $districtID;
            $this->districtName = $districtName;
            $this->provinceName = $provinceName;
        }

        public static function getAll()
        {
            $agencyList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Agency Natural Join DistrictAgency Natural Join District Natural Join Province ORDER BY `DistrictAgency`.`districtAgencyID` ASC";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
            $agencyID = $my_row["agencyID"];
            $agencyName = $my_row["agencyName"];
            $districtAgencyID = $my_row["districtAgencyID"];
            $districtID = $my_row["districtID"];
            $districtName = $my_row["districtName"];
            $provinceName = $my_row["provinceName"];
            $agencyList[] = new Agency($agencyID,$agencyName,$districtAgencyID,$districtID,$districtName,$provinceName);
            }
            require("connection_close.php");
            return $agencyList;
        }

}
?>