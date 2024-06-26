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
							<p><strong>Biomedical Engineering</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/bio.png" alt="" /></a>
                    <h3></h3>
										<p>Nanotechnology allows chemotherapies to target cancerous cells rather than expose noncancerous cells. A pacemaker is implanted in a patient with a history of irregular heartbeats. An artificial hip joint replacement restores mobility and improves one's quality of life. These devices are a few examples of how biomedical engineers develop solutions in medical care.  

Your studies will prepare you to be solution-driven as you work toward developing new ways to improve human health. You'll also focus on optimizing current devices and machines used in patient care. As you analyze healthcare issues, your work will be instrumental in enhancing the next generation's lives.</p>
										<div class="line"></div>
										<p><strong>What does a student majoring in Biomedical Engineering study? </strong>

</p>
                    <ul>
											<li>Biology,Biomaterials,Biomechanics</li>
											<li>Biostatistics.Physiology,Physics</li>
											<li>Chemistry and Calculus</li>
										</ul>
										<div class="line"></div>
<p>The skills you'll acquire will prepare you to research, design, and develop devices and equipment to improve human health. Your unique skill set will position you for work in various professional settings such as laboratories, hospitals, doctors' offices, and manufacturing companies.</p>
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
                    <p><a href="cur/bio.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/bio1.webp" alt="" /></a>
											<p><strong>What are the requirements for a Biomedical Engineering degree? </strong><p>
											<p>You must complete general education courses and the foundational engineering and science courses required by your accredited institution. Certain science and engineering courses will also be paired with a laboratory course. Prepare to add internships and research projects to your workload.</p>
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
