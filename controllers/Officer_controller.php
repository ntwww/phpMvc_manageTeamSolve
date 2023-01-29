<?php
    class OfficerController
    {
        public function index()
        {
            $officerList = Officer::getAll();
            require_once('views/Officer/index.php');
        }
        public function newOfficer()
        {
            $agencyList = Agency::getAll();
            $enumList = Officer::getEnum();
            require_once('views/Officer/newOfficer.php');
        }
        public function addOfficer()
        {
            $districtAgencyID=$_GET['districtAgencyID'];
            $officerTitle=$_GET['enum'];
            $firstName=$_GET['firstName'];
            $lastName=$_GET['lastName'];
            Officer::add($districtAgencyID,$officerTitle,$firstName,$lastName);
            OfficerController::index();
        }
        public function search()
        {
            $key = $_GET['key'];
            $officerList=Officer::search($key);
            require_once('views/Officer/index.php');
        }
        public function updateForm(){
            $officerID=$_GET['officerID'];
            $enumList = Officer::getEnum();
            $officer=Officer::getById($officerID);
            require_once('views/Officer/updateForm.php');
        }
        public function update()
        {
            $officerID=$_GET['officerID'];
            $officerTitle=$_GET['officerTitle'];
            $firstName=$_GET['firstName'];
            $lastName=$_GET['lastName'];
            Officer::update($officerID,$officerTitle,$firstName,$lastName);
            OfficerController::index();
        } 
        public function deleteConfirm(){
            $id=$_GET['officerID'];
            $officer=Officer::getById($id);
            require_once('views/Officer/deleteConfirm.php');
        }
        public function delete(){
            $id=$_GET['officerID'];
            $Officer=Officer::delete($id);
            OfficerController::index();
        }
    }
?>