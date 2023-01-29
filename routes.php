<?php 
$controllers=array('pages'=>['home','error'],
'member'=>['indexMember','newMember','addMember','search','updateForm','update','deleteConfirm','delete'],
'status'=>['indexStatus','search'],
'problem'=>['indexProblem','newProblem','addProblem','search','updateForm','update','deleteConfirm','delete']);
function call($controller,$action){
    require_once("controllers/".$controller."_CONTROLLER.php");
    
    switch($controller){
        case "pages": $controller= new PageController();break;
        case "member":  require_once("model/memberModel.php");
                        require_once("model/officerModel.php");
                        require_once("model/teamSolveModel.php");
                        $controller = new memberController(); break;
        case "status":  require_once("model/statusModel.php");
                        require_once("model/problemStatusModel.php");
                        require_once("model/managementModel.php");
                        require_once("model/problemListModel.php");
                        $controller = new statusController(); break;
        case "problem": require_once("model/problemModel.php");
                        require_once("model/teamSolveModel.php");
                        require_once("model/problemStatusModel.php");
                        require_once("model/managementModel.php");
                        require_once("model/problemListModel.php");
                        $controller = new problemController(); break;
    }
    $controller->{$action}();
}
if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller])){
        call($controller,$action);
    }
    else{
        call('page','error');
    }
}
else{
    call('page','error');
}
?>