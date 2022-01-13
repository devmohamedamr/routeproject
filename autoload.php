<?php


spl_autoload_register(function ($name){
    if(file_exists("../lib/models/$name.php")){
        require "lib/models/$name.php";
    }else{
        require "lib/$name.php";
    }
});