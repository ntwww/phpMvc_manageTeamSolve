<?php
    class WaterBarrierLine{
        public $barrierID;
        public $riverName;
        public $subDistrictName;
        public $districtName;
        public $provinceName;

        public function __construct($barrierID,$riverName,$subDistrictName,$districtName,$provinceName){
            $this->barrierID = $barrierID;
            $this->riverName = $riverName;
            $this->subDistrictName = $subDistrictName;
            $this->districtName = $districtName;
            $this->provinceName = $provinceName;
        }

        public static function getAll()
        {
            $barrierList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM `WaterBarrierLine`  NATURAL JOIN RiverSubDistrict NATURAL JOIN River NATURAL JOIN SubDistrict NATURAL JOIN District NATURAL JOIN Province";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $barrierID = $my_row["barrierID"];
                $riverName = $my_row["riverName"];
                $riverName = $my_row["riverName"];
                $districtName = $my_row["districtName"];
                $subDistrictName = $my_row["subDistrictName"];
                $provinceName = $my_row["provinceName"];
                $barrierList[] = new WaterBarrierLine($barrierID,$riverName,$subDistrictName,$districtName,$provinceName);
            }
            require("connection_close.php");
            return $barrierList;
        }
    }
?>