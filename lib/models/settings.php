<?php


class settings extends db
{

    public function getSetting(){
        return $this->select('settings')->rows();
    }

    public function getSettingByKey($key){
        return $this->select("settings")->where("key_setting",'=',$key)->first();
    }
    public function updateSetting($data,$id){
//        print_r($data);die;
         return $this->update("settings",$data)->where("key_setting","=",$id)->excute();
    }

}