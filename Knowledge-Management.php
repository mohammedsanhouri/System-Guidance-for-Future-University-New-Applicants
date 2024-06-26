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
							<p><strong>Knowledge-Management</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/KM.jpg" alt="" /></a>
                    <h3></h3>
										<p>A program that focuses on the study of knowledge management in government agencies and corporations for the purpose of supporting stated organizational goals and objectives, and prepares individuals to function as information resource managers. Includes instruction in information technology, principles of computer and information systems, management information systems, applicable policy and regulations, and operations and personnel management.</p>
						

										<div class="line"></div>
										
<p>the art of transforming information and intellectual assets into enduring value for an organization's clients and its people. This allows for reusing intellectual capital, enabling better decision making and creating the conditions for innovation. KM provides people, processes and technology to help knowledge flow to the right people, at the right time, so they can act more efficiently, effectively and creatively. </p>
<div class="line"></div>

<?php
require('./config.php');
if($user['u_valid'] == 0 && $user['u_grade'] >= 60){
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
                    <p><a href="cur/KM.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/km1.jpg" alt="" /></a>
											
											<p>Technological advancements have changed the world, and the abundance of data generated throughout today’s organizations must be maintained, managed, and channeled into meaningful insights. Knowledge Management has become an essential skill in our data-driven society that allows organizations to focus on growth and innovation through sharing and applying of knowledge while remembering and documenting lessons learned, creating an organizational memory.</p>
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
