	<?php
session_start();
if(isset($_SESSION['loggedIn']) == true){
	header("Location: controller.php?page=home");
}else{
	require ('splashscreen.php');
}

function base_url(){
	return "http://" . $_SERVER['SERVER_NAME']."/Guidance System for Future University ";
}
?>