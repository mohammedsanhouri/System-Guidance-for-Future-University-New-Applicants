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
							<p><strong>Architecture</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="career_img/arch.jpg" alt="" /></a>
                    <h3></h3>
										<p>Many buildings are works of art─walled and roofed structures that both inspire and delight the beholder. The creatively and beautifully designed Lotus Temple in New Delhi, India, Guggenheim Museum in New York City, and Valencia Opera House in Valencia, Spain, are examples of such structures. 

Architecture is a multidisciplinary field that combines art, technology, and science to ensure the inside and outside of buildings aren’t only picturesque but also safe and sustainable. In an ever-changing world, architecture requires ongoing learning. Keeping up with societal issues that impact people and the environment means architects must also factor in security, safety, and sustainability.  </p>
										
                    
										<p>Graphic design courses explore typography, visual design, and graphic design technology. Students also may be required to complete a portfolio or, at some schools, an exhibition featuring their work. This project serves as a capstone for the degree. Graduates can use their portfolios when seeking employment.</p>
										<div class="line"></div>
										<p><strong>What does a student majoring in Architecture study? </strong>

</p>
                    <ul>
											<li>History of Architecture,Introduction to Design,Structural Systems</li>
											<li>Foundation Studio,Environmental Systems,Physics</li>
											<li>Social and Behavioral Science</li>
										</ul>
										<div class="line"></div>
<p>A career in architecture requires adaptability to ever-changing landscapes. Understanding environmental and social justice issues and how they affect building structures are also important. Innovation, creativity, and responsibility in this field mean you’ll need to strive for high grades. You’ll also need to build a diverse portfolio that showcases your excellence in construction and design.</p>
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

                    <p><a href="cur/arch.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/arch1.webp" alt="" /></a>
											<p><strong>What Can I Do With Architecture Degree?</strong><p>
											<p>The skills acquired while studying architecture are diverse. Students hone their creative skills through visual design and draft drawing and learn to manage projects by problem solving, collaborating, and being attentive to details.</p>
											
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
