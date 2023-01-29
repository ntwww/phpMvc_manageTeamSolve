<?php
 class problemController
{
    public function indexProblem(){
        $problemList=problemModel::getALL();
        require_once('views/problem/indexProblem.php');
    }
    public function error(){
        require_once('views/Pages/Error.php');
    }
    public function newProblem(){
        $problemList=problemModel::getALL();
        $teamSolveList=teamSolveModel::getALL();
        $problemStatusList=problemStatusModel::getALL();
        $managementList=managementModel::getAll();
        $problemXXX=problemListModel::getAll();
        require_once('views/problem/newProblem.php');
    }
    public function addProblem(){
        $solve_date = $_GET['solve_date'];
        $solve_time= $_GET['solve_time'];
        $mo_id= $_GET['mo_id'];
        $solve_detail= $_GET['solve_detail'];
        $team_id= $_GET['team_id'];
        $solveS_id= $_GET['solveS_id'];
        problemModel::add($solve_date,$solve_time,$mo_id,$solve_detail,$team_id,$solveS_id);
        problemController::indexProblem();
    }
    public function search(){   
        $key =$_GET['key'];
        $problemList = problemModel::search($key);
        require_once('views/problem/indexProblem.php');
    }
    public function updateForm(){
        $id = $_GET['solve_id'];
        $teamSolveList=teamSolveModel::getALL();
        $problemStatusList=problemStatusModel::getALL();
        $managementList=managementModel::getAll();
        $problem=problemModel::get($id);  
        require_once('views/problem/updateForm.php');
        
    }
    public function update(){
        $solve_id = $_GET['solve_id'];
        $solve_date = $_GET['solve_date'];
        $solve_time = $_GET['solve_time'];
        $solve_detail = $_GET['solve_detail'];
        $solveS_id= $_GET['solveS_id'];
        $team_id= $_GET['team_id'];
        problemModel::update($solve_id,$solve_date,$solve_time,$solve_detail,$solveS_id,$team_id);
        problemController::indexProblem();
    }
    public function deleteConfirm(){
        $id=$_GET['solve_id'];
        $problemList=problemModel::get($id);
        require_once('views/problem/deleteConfirm.php');
    }
    public function delete(){
        $id=$_GET['solve_id'];
        problemModel::delete($id);
        problemController::indexProblem();
    }
}

?>