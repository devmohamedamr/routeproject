<?php

define('PATH',dirname(__DIR__).'\routeproject\\');


spl_autoload_register(function ($name){
    if(file_exists(PATH."lib/models/$name.php")){
        require PATH."lib/models/$name.php";
    }else{
        require PATH."lib/$name.php";
    }
});