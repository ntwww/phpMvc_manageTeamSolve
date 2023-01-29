<?php
 class sum2Controller
{
    public function indexSum2(){
        $sum2List=sum2Model::getALL();
        require_once('views/sum2/indexSum2.php');
    }
    public function error(){
        require_once('views/Pages/Error.php');
    }

}
