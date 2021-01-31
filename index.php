<?php
include 'controller.php';
include 'model.php';
session_start();


if(!isset($_GET['page'])){
    
    $ctrl = new Controller();
    $ctrl->goToPage('index');

}else{

    $ctrl = new Controller();
    $ctrl->goToPage($_GET['page']);

}

