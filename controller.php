
<?php 

function base_url(){
	return "http://" . $_SERVER['SERVER_NAME']."/specialty recommendations system";
}

session_start();
if(isset($_GET['page'])){
	if($_GET['page']=="login"){
		if(isset($_SESSION['loggedIn']) == true){
			header("Location: ".base_url());
		}else{
			require ('login.php');
		}

	}else if($_GET['page']=="register"){
		if(isset($_SESSION['loggedIn']) == true){
			header("Location: ".base_url());
		}else{
			require ('register.php');
		}

	}else if($_GET['page']=="my-profile"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('my-profile.php');
		}else{
			header("Location: ".base_url());
		}

	}else if($_GET['page']=="home"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('home.php');
		}else{
			header("Location: ".base_url());
		}

	}else if($_GET['page']=="career"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('career.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="take-test"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('take-test.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="test-result"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('test-result.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="about"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('about.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="feedbacks"){
		if(isset($_SESSION['loggedIn']) && $_SESSION['u_role'] == "admin"){
			require ('feedbacks.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="spec"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('spec.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="article"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('article.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="article2"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('article.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="bot"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('bot.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Computer-Science"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Computer-Science.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Architecture"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Architecture.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Geoinformatics"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Geoinformatics.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Creative-Multimedia"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Creative-Multimedia.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Mechatronics-Engineering"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Mechatronics-Engineering.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Knowledge-Management"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Knowledge-Management.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Electronic-engineering"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Electronic-engineering.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Interior-Design"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Interior-Design.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Graphic-Design"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Graphic-Design.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Computer-Engineering"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Computer-Engineering.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Business"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Business.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Information-technology"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Information-technology.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Biomedical-Engineering"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Biomedical-Engineering.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Telecommunications"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Telecommunications.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="diploma-in-telecommunication"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('diploma-in-telecommunication.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="diploma-in-IT"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('diploma-in-IT.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="testhome"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('testhome.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Computer-Science"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Computer-Science.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Computer-Science"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Computer-Science.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="Computer-Science"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('Computer-Science.php');
		}else{
			header("Location: ".base_url());
		}
	}else{
		echo '404';
	}
}
?>