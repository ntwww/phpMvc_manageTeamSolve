<?php
    class SurveyController
    {
        public function index()
        {
            $surveyList = Survey::getAll();
            require_once('views/Survey/index.php');
        }

        public function detail()
        {
            $id = $_GET['surveyID'];
            $survey = Survey::getById($id);
            require_once('views/Survey/detail.php');
        }

        public function newSurvey()
        {
            $barrierList = WaterBarrierLine::getAll();
            $officerTeamList = OfficerTeamList::getAll();
            $enumList = Survey::getEnum();
            require_once('views/Survey/newSurvey.php');
        }

        public function addSurvey()
        {
            $officerTeamListID = $_GET['officerTeamListID'];
            $barrierID = $_GET['barrierID'];
            $surveyStatus = $_GET['enum'];
            $surveyDate = $_GET['surveyDate'];
            $surveyIssue = $_GET['surveyIssue'];
            $surveyIssueDetail = ['surveyIssueDetail'];
            Survey::add($officerTeamListID,$surveyStatus,$surveyDate,$surveyIssue,$surveyIssueDetail,$barrierID);
            SurveyController::index();
        }

        public function updateComfirm(){
            $id = $_GET['surveyID'];
            $survey = Survey::getById($id);
            require_once('views/Survey/updateComfirm.php');
        }

        public function update(){
            $id = $_GET['surveyID'];
            $surveyIssue = $_GET['surveyIssue'];
            $surveyIssueDetail = $_GET['surveyIssueDetail'];
            echo "$surveyIssue  $surveyIssueDetail";
            Survey::update($id,$surveyIssue,$surveyIssueDetail);
            SurveyController::index();
        }

        public function search(){
            $key = $_GET['key'];
            $surveyList=Survey::search($key);
            require_once('views/Survey/index.php');
        }

    }
?>