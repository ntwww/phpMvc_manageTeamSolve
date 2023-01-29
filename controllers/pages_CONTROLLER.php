<?php
class PageController{
    public function home(){
        require_once('views/Pages/Home.php');
    }
    public function error(){
        require_once('views/Pages/Error.php');
    }
}
?>