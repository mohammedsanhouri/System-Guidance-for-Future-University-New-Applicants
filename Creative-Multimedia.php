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
							<p><strong>Creative Multimedia</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/Creative-Multimedia.jpg" alt="" /></a>
                    <h3></h3>
										<p>The creative media and information businesses have always been a crucial sector of the economy. Together, these sectors invest, produce and disseminate a huge array of content that educates, informs and entertains the public. It is this creative content that people are looking for when they are connecting to the Internet, activating their broadband connection, switching on their mobile phone or choosing a channel on their TV service. The creative and media sector is thus the true heart of the Information Society, as it represents the segment that is the most accessed and most accessible by the masses. The emerging content provider in the Information Society will be a professional who understands the authoring process and who is an expert in graphics, sound, video and text content production.</p>
										<div class="line"></div>
										<p>This degree also focuses on the integration of theory and technology, and their practical application to current and emerging industry trends. An important feature is practical problem solving in multi-disciplinary teams using current and emerging technologies. The programme simulates the practice in the multimedia industry and allows students to develop more specialised skills in their chosen areas of interest and professional development.

</p>

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
                    <p><a href="cur/cm.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/cm.jpg" alt="" /></a>
											<p><strong>What is Creative Multimedia ?</strong><p>
											<p>Creative Multimedia is the vehicle in which emerging technologies drive home the concept of multimedia communications in business, art and design, entertainment and education.

</p>
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
