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
							<p><strong>Electronic Engineering</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/elec.webp" alt="" /></a>
                    <h3></h3>
										<p>Electrical engineering is a field of engineering that generally deals with the study and application of electricity, electronics and electromagnetism. The Electrical Engineering degree is offered at top electrical engineering schools nationally. The field first became an identifiable occupation in the late nineteenth century after commercialization of the electric telegraph and electrical power supply. Electrical Engineering Majors cover a wide range of subtopics including power, electronics, control systems, signal processing and telecommunications.</p>
										<div class="line"></div>
										<p>"There are strong demands for electrical engineers in all sectors of the economy, from social media and entertainment, through energy, automotive and aviation, to telecommunication and defense. Almost all organizations require some form of electrical engineering to support their business."
<br><strong>(Provided By: Clarkson University)</strong></br>

</p>

										<div class="line"></div>
										
<p>To study an electrical engineering degree, you will need a strong background in mathematics and science subjects (especially physics). However, don’t be deterred; many courses will start with some foundation modules designed to ensure this background knowledge is up to the required standard.</p>
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
                    <p><a href="cur/elec.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/elec1.jpg" alt="" /></a>
											<p><strong>What to expect from an electronics engineering degree</strong><p>
											<p>At bachelor level, an electrical engineering degree will aim to give students grounding in the underlying principles of electronic and electrical engineering, before allowing specialization in an area of interest later on in the course. Students will also be involved in projects working within groups.</p>
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
