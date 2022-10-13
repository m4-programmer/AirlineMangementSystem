<?php 
session_start();
require '../classes/Db.php';
require '../classes/User.php';
require '../classes/Admin.php';
$user = new User;
$admin = new Admin;
 ?>