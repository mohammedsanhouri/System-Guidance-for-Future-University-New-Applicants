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
							<p><strong>Computer Engineering</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/comeng.webp" alt="" /></a>
                    <h3></h3>
										<p>Through the study of mathematics, physics, and computer science, computer engineering majors learn to analyze, design, and develop computer hardware and software</p>
										<p>Engineering design courses and labs are integrated into all four years of the computer engineering major. As you advance, your design assignments will become more complex and interesting.

You may get to finish your studies with a senior design project that shows off all you’ve learned. If you’re like many students, you’ll choose a project in a specialty such as web technology, robotics, or computer security in which you might someday build a career</p>
										<div class="line"></div>
										<p>Computer engineering majors’ coursework starts with foundational math and science courses, such as general chemistry, calculus and physics. Students can take core major classes in programming, data structures and algorithms, computer systems engineering, computer architecture and design of operating systems.</strong>

</p>

										<div class="line"></div>
										<h3><strong>It Helps To Be...</strong></h3>
<p>A problem solver and a team player who is able to work independently and in teams. Excited by the thrill of devising creative solutions. Interested in doing work that shapes our future.</p>
<div class="line"></div>

<?php
require('./config.php');
if($user['u_valid'] == 0 && $user['u_grade'] >= 65){
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
                    <p><a href="cur/computereng.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/ce.jpg" alt="" /></a>
											<p><strong>How to Know if This Specialty Is the Right Fit for You</strong><p>
											<p>Computer engineering could be a good choice for students adept with computing systems and mathematics. These students should be interested in hardware, software and related tools. Creative, strategic and independent thinkers could also do well as computer engineering majors. Because they may need to work with others in devising design solutions to problems, students need to have teamwork and leadership skills. They should also be able to communicate effectively.</p>
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
