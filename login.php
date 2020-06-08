<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once 'autoload.php';
$config = include('config.php');
$faceBook = new FacebookLogin($config);
$url = $faceBook->getUrl();
?>

<a href="<?php echo $url;?>">loginwithfb</a>
