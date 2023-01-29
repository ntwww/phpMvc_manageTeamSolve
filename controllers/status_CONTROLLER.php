<?php
 class statusController
{
    public function indexStatus(){
        $statusList=statusModel::getALL();
        require_once('views/status/indexStatus.php');
    }
    public function error(){
        require_once('views/Pages/Error.php');
    }
    public function search(){   
        $key =$_GET['key'];
        $statusList = statusModel::search($key);
        require_once('views/status/indexStatus.php');
    }
    // public function updateForm(){
    //     $id = $_GET['solve_id'];
       
    //     $problemStatusList=problemStatusModel::getALL();
    //     $managementList=managementModel::getALL();
    //     $status=statusModel::get($id);  
    //     require_once('views/status/updateForm.php');
        
    // }
    // public function update(){
    //     $solve_id = $_GET['solve_id'];
    //     $solve_date = $_GET['solve_date'];
    //     $solve_time = $_GET['solve_time'];
    //     $solve_detail= $_GET['solve_detail'];
    //     $solveS_id= $_GET['solveS_id'];
    //     statusModel::update($solve_id,$solve_date,$solve_time,$solve_detail,$solveS_id);
    //     statusController::indexStatus();

    // }
    
}
