<?php
 class memberController
{
    public function indexMember(){

        $memberList=memberModel::getALL();

        require_once('views/member/indexMember.php');
    }
    public function error(){
        require_once('views/Pages/Error.php');
    }

    public function newMember(){
        $memberList=memberModel::getALL();
        $officerList=officerModel::getALL();
        $teamSolveList=teamSolveModel::getALL();
        require_once('views/member/newMember.php');
    }
    public function addMember(){
        $officer_id = $_GET['officer_id'];
        $team_id= $_GET['team_id'];
        memberModel::add($officer_id,$team_id);
        memberController::indexMember();
    }
    public function search(){   
        $key =$_GET['key'];
        $memberList = memberModel::search($key);
        require_once('views/member/indexMember.php');
    }
    public function updateForm(){
        $id = $_GET['teamn_id'];
        $teamSolveList=teamSolveModel::getALL();
        $member=memberModel::get($id);
        require_once('views/member/updateForm.php');
    }
    public function update(){
        $teamn_id = $_GET['teamn_id'];
        $team_id= $_GET['team_id'];
        memberModel::update($teamn_id,$team_id);
        memberController::indexMember();

    }
    public function deleteConfirm(){
        $id=$_GET['teamn_id'];
        $memberList=memberModel::get($id);
        require_once('views/member/deleteConfirm.php');
    }
    public function delete(){
        $id=$_GET['teamn_id'];
        memberModel::delete($id);
        memberController::indexMember();
    }
}
