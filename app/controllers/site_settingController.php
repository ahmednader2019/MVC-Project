<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\site_settingModel;
use itrax\core\helper;
class site_settingController extends controller{

    public function __construct(){
        session_start();
        if(empty($_SESSION['user'])){
          exit("this method not allowed");
        }
    }  
      public function theam(){
        // echo $numberOfCategoy;die;
        $title = "dashboard";
        //   echo "welcome home";
        return $this->view("dashboard/site_setting/theam",['title' => $title]);
      }  

      public function posttheam(){
        //$theam = new site_settingModel();
        $theam = site_settingModel::instance();
        $theam_res =  $theam->UpdateSetting($_POST,1);
        if($theam_res){
            helper::redirect("site_setting/theam");
        }
      }

      public function setting(){
        $title = "setting";
        //$theam = new site_settingModel();
        $theam = site_settingModel::instance();
        $headline = $theam->GetSetting("headline");
        return $this->view("dashboard/site_setting/setting",['title' => $title , "headline"=>$headline]);
      }

      public function postsetting()
      {
       // $theam = new site_settingModel();
        $theam = site_settingModel::instacne();
        $data = [
            'site_value' => $_POST['site_value']
        ];
        $theam_res =  $theam->UpdateSetting($data,2);
        if($theam_res){
            helper::redirect("site_setting/setting");
        }
      }
      }
