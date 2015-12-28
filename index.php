<?php
$action = (isset($_POST['action'])) ? 'default' : $_POST['action'];
switch($action){
default:
include('includes/config.php');
include('views/head.php');
include('views/body.php');
break;
}