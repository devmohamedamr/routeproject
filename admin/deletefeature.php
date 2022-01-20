<?php

session_start();
if(empty($_SESSION['user'])){
    header("location: login.php");
}

require "../autoload.php";

$feature = new feature();
$feature->deleteFeature($_GET['id']);

header("location: feature.php");
