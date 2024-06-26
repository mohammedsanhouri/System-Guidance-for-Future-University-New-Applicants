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
							<p><strong>Business</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/bus.jpg" alt="" /></a>
                    <h3></h3>
										<p>Business is ubiquitous in our society. We conduct business in a variety of ways every day, including using smartphones, streaming shows, and purchasing food. In-store or online, our day-to-day activities or the items we purchase all begin with a business idea. 

People's personalities shape their preferences and what they deem essential. That's where businesses come in. Behind the scenes, various business professionals are working toward an organization's goals. Whatever the goods or services an organization sells to consumers, it's your job to ensure your company's objectives are met.

As a business student, you'll take accounting, finance, economics, marketing, human resources, and project management classes. And because today's society is immersed in technology, your coursework will include classes on how the digital world impacts businesses.</p>
										<div class="line"></div>
										<p>"Upon completion of the business administration program, students should be able to demonstrate analytic and decision-making competencies in core business disciplines,demonstrate effective and relevant communication skills, demonstrate effective management through the development of effective leadership, interpersonal, and teamwork skills, and demonstrate global leadership competencies." 
<br><strong>(Provided by: University of North Carolina - Chapel Hill)</strong></br>

</p>

										<div class="line"></div>
										<h3><strong>What does a student majoring in Business study? </strong></h3>
<p>Introduction to Business,Financial Accounting,Marketing
<br>Data Analytics,Investments,and Calculus</br></p>
<div class="line"></div>

<?php
require('./config.php');
if($user['u_valid'] == 0 && $user['u_grade'] >= 55){
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
                    <p><a href="cur/dip-itinbus.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/bus1.jpg" alt="" /></a>
											<p><strong>What can I do with a Business degree?</strong><p>
											<p>As a business major, you’ll take classes in various disciplines, which will ensure you to have marketable skills in management, financial data analysis, communication, and problem-solving. </p>
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
