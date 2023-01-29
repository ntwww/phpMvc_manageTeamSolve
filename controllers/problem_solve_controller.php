<?php
class problem_solve_controller{
    public function index_problem_solve(){
        $solvelist=problem_solve::getALL();
        require_once('views/problem_solve/index_problem_solve.php');
    }
    public function error(){
        require_once('views/Pages/error.php');
    }
    public function new_problem_solve(){
        $solvelist=problem_solve::getAll();
        $molist=moid::getAll();
        require_once('views/problem_solve/new_prodlem_solve.php');
    }
    public function add_problem_solve(){
        $solve_id = $_GET['solve_id'];
        $solve_date= $_GET['solve_date'];
        $solve_time= $_GET['solve_time'];
        $solve_name= $_GET['solve_name'];
        $solve_detail= $_GET['solve_detail'];
        $solve_yesorno= $_GET['solve_yesorno'];
        $mo_id= $_GET['mo_id'];

        problem_solve::add($solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_id);
        problem_solve_controller::index_problem_solve();

    }
    public function search(){
        $key =$_GET['key'];
        $solvelist = problem_solve::search($key);
        require_once('views/problem_solve/index_problem_solve.php');
    }
    public function updateForm(){
        $id = $_GET['solve_id'];
        $solvelist=problem_solve::getALL();
        $molist=moid::getAll();
        $solve=problem_solve::get($id);
       
        require_once('views/problem_solve/updateForm.php');
        
    }
    public function update(){
        $id = $_GET['id'];
        $solve_id = $_GET['solve_id'];
        $solve_date= $_GET['solve_date'];
        $solve_time= $_GET['solve_time'];
        $solve_name= $_GET['solve_name'];
        $solve_detail= $_GET['solve_detail'];
        $solve_yesorno= $_GET['solve_yesorno'];
        $mo_id= $_GET['mo_id'];
        problem_solve::update($id,$solve_id,$solve_date,$solve_time,$solve_name,$solve_detail,$solve_yesorno,$mo_id);
        problem_solve_controller::index_problem_solve();

    }
    public function deleteConfirm(){
        $id=$_GET['solve_id'];
        $solve=problem_solve::get($id);
        require_once('views/problem_solve/deleteConfirm.php');
    }
    public function delete(){
        $id=$_GET['id'];
        problem_solve::delete($id);
        problem_solve_controller::index_problem_solve();
    }
}
?>