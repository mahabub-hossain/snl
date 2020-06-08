<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once 'autoload.php';
$config = include('config.php');
if (!session_id()) {
    session_start();
}
if(isset($_GET['code'])){
    $code =  $_GET['code'];
    $facebook = new FacebookLogin($config);
    $accessToken = $facebook->getAccesstoken($code);
    echo $accessToken;
}
