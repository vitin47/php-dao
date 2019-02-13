<?php 

require_once("config.php");

$user = new Usuario();
$user->loadbyid(6);
echo $user;
 ?>