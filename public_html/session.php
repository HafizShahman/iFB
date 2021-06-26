<?php 
session_start();
 $sessionname=$_SESSION['sessionname'];

if($sessionname==""){ 
	header("Location:index.html");
}
?>