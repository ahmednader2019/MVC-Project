<?php

namespace itrax\models;

use itrax\core\db;


class site_settingModel extends db
{
    private static $object ;

    public static function instance(){
        if(isset(self::$object)){
            return self::$object ;
        }else{
            self::$object = new site_settingModel();
            return self::$object;
        }
    }
    public function GetSetting($key){
    $setting =  $this->all("SELECT `site_value` FROM `site_setting` WHERE  `sitekey` = '$key' ");
     return $setting[0]['site_value'];  
    }

    public function UpdateSetting($value,$id){
        $setting =  $this->update($value,$id);
        return $setting;  
    }
}