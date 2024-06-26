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
							<p><strong>Graphic Design</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="career_img/graphic.jpg" alt="" /></a>
                    <h3></h3>
										<p>Graphic design focuses on creating art for a purpose such as an advertisement or company logo.

For this major you’ll take lots of graphic design classes. But you’ll also need to take classes in the arts, science, math, and social sciences to earn your bachelor’s degree. These extra courses help make sure that you graduate from college with all of the skills you’ll need to prepare for a successful career in graphic design. </p>
										
                    
										<p>Graphic design courses explore typography, visual design, and graphic design technology. Students also may be required to complete a portfolio or, at some schools, an exhibition featuring their work. This project serves as a capstone for the degree. Graduates can use their portfolios when seeking employment.</p>
										<div class="line"></div>
										<p><strong>Are You Ready To...?</strong>

</p>
                    <ul>
											<li>Complete an internship designing Web pages, developing software, testing software, or building other computer skills</li>
											<li>Build teamwork skills and friendships while problem solving with other students</li>
										</ul>
										<div class="line"></div>
<p>In this multidisciplinary major, pay close attention to the courses and credits you need each semester. You may want to consider studying abroad. You’ll not only have plenty of opportunities to explore music, philosophy, film, art, languages, and religions. Studying diverse disciplines in a different country will also give you a new perspective. </p>
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
                    <p><a href="cur/graphic.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/GR.jpg" alt="" /></a>
											<p><strong>What Can I Do With a Graphic Design Degree?</strong><p>
											<p>Graphic designers work in a variety of industries, including printing, advertising, and newspapers. Thanks to their artistic ability, computer skills, and time management skills, they also may pursue careers in publishing, web design and development, and animation.
About 21% of graphic designers are self-employed, according to the BLS. That percentage increases to 56% for art directors. Work schedules for these professionals vary depending on client demands. Some designers work evenings and/or weekends.</p>
											
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
