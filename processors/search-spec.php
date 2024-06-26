<?php

if(isset($_GET['from']) && $_GET['from'] == "spec1"){
	$s = $_POST['s_search'];
	header('Location: ../controller.php?page=spec&search='.$s);
}else if(isset($_GET['from']) && $_GET['from'] == "feedbacks"){
	$s = $_POST['s_search'];
	header('Location: ../controller.php?page=feedbacks&search='.$s);
}else{
	header('Location: ../controller.php?page=home');
}

?>