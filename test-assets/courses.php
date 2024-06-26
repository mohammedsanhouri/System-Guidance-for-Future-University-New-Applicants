	<?php
	require('./config.php');
if($user['u_valid'] == 1){
function getAll(){
	$objs = array();

	$c = new stdClass();
	$c->career = "Electronic-engineering";
	$c->courses = ['<a href="controller.php?page=Computer-Engineering"><u>Computer-Engineering</u></a>',  
				   '<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Mechatronics-Engineering";
	$c->courses = ['<a href="controller.php?page=Electronic-engineering"><u>Electronic engineering</u></a>', 
	'<a href="controller.php?page=Computer engineering"><u>Computer engineering</u></a>', 

];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Biomedical-Engineering";
	$c->courses = ['<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>',  
	'<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
	array_push($objs, $c);


	$c = new stdClass();
	$c->career = "Information-technology";
	$c->courses = ['<a href="controller.php?page=Computer-Science"><u>Computer-Science</u></a>',  
	'<a href="controller.php?page=Computer-Science"><u>SCI</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Computer-Science";
	$c->courses = ['<a href="controller.php?page=Computer-Science"><u>SCI</u></a>',  
	'<a href="controller.php?page=Information-technology"><u>Information-technology</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Architecture";
	$c->courses = ['<a href="controller.php?page=Graphic-Design"><u>Graphic-Design</u></a>',  
	'<a href="controller.php?page=Interior-Design"><u>Interior-Design</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Business";
	$c->courses = ['<a href="controller.php?page=Computer-Science"><u>SCI</u></a>',  
	'<a href="controller.php?page=Computer-Science"><u>SCI</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Computer-Engineering";
	$c->courses = ['<a href="controller.php?page=Electronic-engineering"><u>Electronic-engineering</u></a>',  
	'<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Graphic-Design";
	$c->courses = ['<a href="controller.php?page=Interior-Design"><u>Interior-Design</u></a>',  
	'<a href="controller.php?page=Architecture"><u>Architecture</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Interior-Design";
	$c->courses = ['<a href="controller.php?page=Graphic-Design"><u>Graphic-Design</u></a>',  
	'<a href="controller.php?page=Architecture"><u>Architecture</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Knowledge-Management";
	$c->courses = ['<a href="controller.php?page=Information-technology"><u>Information-technology</u></a>',  
	'<a href="controller.php?page=Computer-Science"><u>Computer-Science</u></a>'];
	array_push($objs, $c);


	$c = new stdClass();
	$c->career = "Creative-Multimedia";
	$c->courses = ['<a href="controller.php?page=Interior-Design"><u>Interior-Design</u></a>',  
	'<a href="controller.php?page=Computer-Science"><u>Computer-science</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Geoinformatics";
	$c->courses = ['<a href="controller.php?page=Computer-Science"><u>Computer-Science</u></a>',  
	'<a href="controller.php?page=Information-technology"><u>Information-technology</u></a>'];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Telecommunications";
	$c->courses = ['<a href="controller.php?page=Electronic-engineering"><u>Electronic-engineering</u></a>',  
	'<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
	array_push($objs, $c);

	return $objs;
}


function getRelatedCourses($career){
	$courses = array();
	foreach (getAll() as $obj) {
		if($obj->career == $career){
			$courses = $obj->courses;
			break;
		}
	}
	return $courses;
}
}else{
	function getAll(){
		$objs = array();

		$c = new stdClass();
		$c->career = "Electronic-engineering";
		$c->courses = ['<a href="controller.php?page=Computer-Engineering"><u>Computer-Engineering</u></a>',  
					   '<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Mechatronics-Engineering";
		$c->courses = ['<a href="controller.php?page=Electronic-engineering"><u>Electronic engineering</u></a>', 
		'<a href="controller.php?page=Computer engineering"><u>Computer engineering</u></a>', 
	
	];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Biomedical-Engineering";
		$c->courses = ['<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>',  
		'<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
		array_push($objs, $c);
	
	
		$c = new stdClass();
		$c->career = "Information-technology";
		$c->courses = ['<a href="controller.php?page=Computer-Science"><u>Computer-Science</u></a>',  
		'<a href="controller.php?page=Computer-Science"><u>SCI</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Computer-Science";
		$c->courses = ['<a href="controller.php?page=Computer-Science"><u>SCI</u></a>',  
		'<a href="controller.php?page=Information-technology"><u>Information-technology</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Architecture";
		$c->courses = ['<a href="controller.php?page=Graphic-Design"><u>Graphic-Design</u></a>',  
		'<a href="controller.php?page=Interior-Design"><u>Interior-Design</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Business";
		$c->courses = ['<a href="controller.php?page=Computer-Science"><u>SCI</u></a>',  
		'<a href="controller.php?page=Computer-Science"><u>SCI</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Computer-Engineering";
		$c->courses = ['<a href="controller.php?page=Electronic-engineering"><u>Electronic-engineering</u></a>',  
		'<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Graphic-Design";
		$c->courses = ['<a href="controller.php?page=Interior-Design"><u>Interior-Design</u></a>',  
		'<a href="controller.php?page=Architecture"><u>Architecture</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Interior-Design";
		$c->courses = ['<a href="controller.php?page=Graphic-Design"><u>Graphic-Design</u></a>',  
		'<a href="controller.php?page=Architecture"><u>Architecture</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Knowledge-Management";
		$c->courses = ['<a href="controller.php?page=Information-technology"><u>Information-technology</u></a>',  
		'<a href="controller.php?page=Computer-Science"><u>Computer-Science</u></a>'];
		array_push($objs, $c);
	
	
		$c = new stdClass();
		$c->career = "Creative-Multimedia";
		$c->courses = ['<a href="controller.php?page=Interior-Design"><u>Interior-Design</u></a>',  
		'<a href="controller.php?page=Computer-Science"><u>Computer-science</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Geoinformatics";
		$c->courses = ['<a href="controller.php?page=Computer-Science"><u>Computer-Science</u></a>',  
		'<a href="controller.php?page=Information-technology"><u>Information-technology</u></a>'];
		array_push($objs, $c);
	
		$c = new stdClass();
		$c->career = "Telecommunications";
		$c->courses = ['<a href="controller.php?page=Electronic-engineering"><u>Electronic-engineering</u></a>',  
		'<a href="controller.php?page=Mechatronics-Engineering"><u>Mechatronics-Engineering</u></a>'];
		array_push($objs, $c);
	
		return $objs;
	}
	
	
	function getRelatedCourses($career){
		$courses = array();
		foreach (getAll() as $obj) {
			if($obj->career == $career){
				$courses = $obj->courses;
				break;
			}
		}
		return $courses;
	}
}


?>