<?php


class feature extends db
{

     public function addNewFeature($data){
         $this->insert('feature',$data)->excute();
     }
     public function getFeature(){
         return $this->select('feature')->rows();
     }

     public function deleteFeature($id){
         return $this->delete('feature')->where('id','=',$id)->excute();
     }
     public function getFeatureById($id){
         return $this->select('feature')->where("id","=",$id)->first();
     }

     public function updateFeature($data){
         return $this->update("feature",$data)->where("id","=",$data['id'])->excute();
     }
}