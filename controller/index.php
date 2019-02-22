<?php 
include ('../model/Connect.php');
include ('../model/news.php');
include ('../model/cat.php');
if(isset($_GET['atc'])) {
    $action = $_GET['atc'];
}
else {
    $action = "";
}
switch ($action) {
    case "archive";
        include "../view/home/archive.php";
    break;
    
    default:
        include "../view/home/home.php";
    break;
}
?>