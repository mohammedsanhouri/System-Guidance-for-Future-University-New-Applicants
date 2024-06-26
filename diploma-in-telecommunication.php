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
							<p><strong>Diploma in Telecommunications</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/tele1.jpg" alt="" /></a>
                    <h3></h3>
										<p>Telecommunications involves the study of the science and technology that is involved in communications at a distance. As such, students learn about the installation and maintenance of video, audio, and multimedia equipment. Business and industry practices and standards are studied. Some programs that incorporate network and information technology may also teach students how to solve technology-related problems, recommend maintenance solutions, provide effective system designs, and suggest appropriate core information technologies</p>
						

										<div class="line"></div>
										<h3><strong>What does a student majoring in Telecommunications study? </strong></h3>
<p>Information technology communications,Cyber law and ethics,Website design
<br>IT service management,Network security and Network maintenance</br></p>
<div class="line"></div>

<?php
require('./config.php');
if($user['u_grade'] >= 55){
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
                    <p><a href="cur/dip-telecom.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/tele.jpg" alt="" /></a>
											
											<p>Because the industry changes so rapidly, individuals working in telecommunications should maintain their skills to stay abreast of the latest technology. Continuing education is typically available at community colleges and training centers.

A bachelor's degree program in telecommunications teaches students about the installation and maintenance of communications equipment. Graduates of these programs can further their education with a master's degree in the field or work as telecommunications technicians.</p>
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
