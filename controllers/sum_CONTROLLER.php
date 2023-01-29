<?php
 class sumController
{
    public function indexSum(){
        $sumList=sumModel::getALL();
        require_once('views/sum/indexSum.php');
    }
    public function error(){
        require_once('views/Pages/Error.php');
    }
    // public function search(){   
    //     $key =$_GET['key'];
    //     $sumList = sumModel::search($key);
    //     require_once('views/sum/indexSum.php');
    // }
    
}
