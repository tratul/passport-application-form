<?php
session_start(); //start the PHP_session function 

if($_POST['submit1']){
	//$_SESSION['un']=$un;
	header("location:stage-1.php");
	
}
else if($_POST['submit2']){
	header("location:stage-2.php");
}

else if($_POST['submit3']){
	header("location:stage-1.php");
}
else if($_POST['submit4']){
	header("location:stage-3.php");
}
else if($_POST['submit5']){
	header("location:stage-2.php");
}
else if($_POST['submit6']){
	header("location:stage-3.php");
}


?>