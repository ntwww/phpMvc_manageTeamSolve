<?php
    class OfficerTeamController
    {
        public function index()
        {
            $officerTeamList = OfficerTeamList::getAll();
            require_once('views/OfficerTeam/index.php');
        }

        public function detailForm()
        {
            $ID = $_GET['officerTeamListID'];
            $officerTeam = OfficerTeamDetail::getByID($ID);
            require_once('views/OfficerTeam/detail.php');
        }

        public function newOfficerTeam()
        {
            $id = OfficerTeamList::addList();
            $enumList = OfficerTeamDetail::getEnum();
            $officerList = Officer::getAll();
            require_once('views/OfficerTeam/newOfficerTeam.php');
        }

        public function addOfficerTeam()
        {
            $officerTeamListID=$_GET['officerTeamListID'];
            $officerID=$_GET['officerID'];
            $position=$_GET['enum'];
            $officerID1=$_GET['officerID1'];
            $position1=$_GET['enum1'];
            $officerID2=$_GET['officerID2'];
            $position2=$_GET['enum2'];
            OfficerTeamDetail::add($officerID,$officerTeamListID,$position,$officerID1,$position1,$officerID2,$position2);
            OfficerTeamController::index();
        }
        public function deleteConfirm(){
            $id=$_GET['officerTeamListID'];
            $officerTeam = OfficerTeamDetail::getByID($id);
            require_once('views/OfficerTeam/deleteConfirm.php');
        }
        public function delete(){
            $id=$_GET['id'];
            $OfficerTeam=OfficerTeamList::delete($id);
            OfficerTeamController::index();
        }

        public function search()
        {
            $key = $_GET['key'];
            $officerTeam=OfficerTeamDetail::search($key);
            require_once('views/OfficerTeam/detail.php');
        }
        
    }
?>