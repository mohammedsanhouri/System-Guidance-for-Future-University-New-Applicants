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
							<p><strong>Geoinformatics</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/geo.jpg" alt="" /></a>
                    <h3></h3>Geoinformatics offers a multidisciplinary curriculum that draws on several areas of study like computer science, geography, geological sciences, anthropology, civil engineering, environmental science, architecture and urban planning.

Geoinformatics generates accurate real-time maps of the earth’s geography by using spatial data science, geographic information system (GIS), and remote sensing technologies to better understand spatial patterns and changes over time. Companies like Google, Amazon, Uber, and many business and governmental agencies use the information provided from geoinformatics to make important decisions for societal benefits, scientific research and exploration.</p>
										<div class="line"></div>
										<p>Geomatics combines computer science with geographic data analysis to devise data-driven solutions to complex problems, like mapping the response time of fire services and fire stations.

Learn to use tools such as remote sensing, computer mapping, geographic information systems (GIS), and GPS to analyze geographic data, understand spatial data, and make meaningful decisions. At the same time, you’ll also learn the fundamentals of software design from Waterloo’s computer science experts and have the opportunity to apply your knowledge and gain paid work experience in co-op.

Once you graduate, you’ll find no end of opportunities to put your skills to work. Help governments prepare for natural hazards such as floods. Track crime rates or the spread of disease. Map demographics for businesses, or develop transportation routes for municipalities. In this rapidly growing field, our grads are in high demand!

</p>

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
                    <p><a href="cur/geo.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/gis.jpg" alt="" /></a>
											<p><strong></strong><p>
											<p>Get career-relevant skills. Because we’ll train you on the advanced industry tools and techniques such as remote sensing, drones, and global positioning receivers, you’re ready to make an impact from day one of your career.</p>
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
