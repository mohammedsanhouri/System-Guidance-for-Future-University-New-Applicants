<?php  include('header.php')?>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <div class="container">
  <div class="row">

    <div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2></h2>
							<p><strong>Mechatronics Engineering</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/Mechatronics-Engineering.jpg" alt="" /></a>
                    <h3></h3>
										<p>
Mechatronics is a multidisciplinary field that refers to the skill sets needed in the contemporary, advanced automated manufacturing industry. At the intersection of mechanics, electronics, and computing, mechatronics specialists create simpler, smarter systems. Mechatronics is an essential foundation for the expected growth in automation and manufacturing.

Mechatronics deals with robotics, control systems, and electro-mechanical systems Do you like mechanics, robotics, or production equipment? Do you have a knack for creative problem solving? Do you enjoy technical and engineering activities? Can you work well as a member of a team? </p>
						

										<div class="line"></div>
<p>Mechatronic specialists have broad multidisciplinary skills, so they are able to move into more traditional engineering disciplines.

A mechatronics specialist is a creative problem solver who can work on a team. Thinking creatively is the first step; being able to communicate good ideas to coworkers involves tact.

Many mechatronic engineers use computer-aided design (CAD) and other engineering software for modeling, simulating, and analyzing complex mechanical, electronic, or other engineering systems./p>
<div class="line"></div>

<?php
require('./config.php');
if($user['u_valid'] == 0 && $user['u_grade'] >= 70){
                               ?>
							   <p><strong><span class="icon solid alt major fa-check"> You are qualified for this specialty</span>					   
                <?php
}else{
	?>
<p><strong><span class="icon solid alt major fa-times"> Unfortunately you are not qualified for this specialty</span>                
	<?php
}
?>
     </strong></p>                     
                 
	 <div class="line"></div>
                    <p><a href="cur/mecha.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
                    </p>


									</section>
                  
							</div>
              
				
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section>
										<section>
											<h3>Your Major Matters</h3>
											<p>Choosing a major could be an even more important decision than which college to choose. Studies have shown that students who choose a major that is a good fit for them tend to get better grades and are also more likely to graduate on time. Your future salary also largely depends on your major, even more so than the college you choose.</p>
											
												<ul class="actions">
													
												</ul>
											
										</section>
										
										<section>
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/mecha.jpg" alt="" /></a>
											
											<p>There are many tasks mechatronic specialists perform, depending on their particular industry.

Some design, develop, maintain, and manage high-technology engineering systems for the automation of industrial tasks.
Others apply mechatronic/automated solutions to the transfer of material components or finished goods, or design and assist with the manufacture of consumer products such as cameras and video recorders.
Still others carry out studies into the feasibility, cost implications, and performance benefits of new mechatronic equipment.
And others apply electronic and mechanical processes and computers to tasks where the use of human labor may be dangerous (for example, underwater exploration, mining, or forestry).</p>
																							<ul class="actions">
													
												</ul>
											
										</section>
									</section>
                 
						</header>

				</section>
		

		</div>

		<!-- Scripts -->
  </div>
  </div>

  <?php  include('footer.php')?>
