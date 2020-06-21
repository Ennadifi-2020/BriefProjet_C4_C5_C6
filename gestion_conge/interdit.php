<?php
include("connect.php");
session_start();
if (isset($_POST['déconnecté'])){
	unset($_SESSION ['name']);
	header ('location:login.php');
}
if (!isset($_SESSION ['name']))
    header ('location:login.php');   
    ?>