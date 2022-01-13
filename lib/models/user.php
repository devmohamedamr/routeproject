<?php

class user extends db{

    public function getUserData($email,$password){
       return $this->select("user")->where("email","=",$email)->Andwhere("password","=",$password)->first();
    }
}