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
							<p><strong>Information Technology</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/it.png" alt="" /></a>
                    <h3></h3>
										<p>IT majors focus on how information and computing systems support business, research, and communications needs. Instruction ranges from the basics of computer hardware to the complex relationship between humans and computers.</p>
										<div class="line"></div>
										<p>As an information technology (IT) major, you'll study computer science, business, and communications. Along the way, you might focus on one specialty such as web development or digital communications. But regardless of your focus, you’ll acquire strong technical and communication skills.

</p>

										<div class="line"></div>
										<h3><strong>It Helps To Be... </strong></h3>
<p>A flexible and adaptable problem solver who is ready and willing to learn about working with systems and with people.</p>
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
                    <p><a href="cur/IT.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/it1.jpg" alt="" /></a>
											<p><strong></strong><p>
											<p>Since an IT major involves taking core courses in several different departments, many students end up with a specialty or track in one area of interest. For example, you may decide to specialize in Web development and take classes such as Web page design and database development for the Web. Or you may be drawn to digital communications and take classes in telecommunications networks and the science of telephones. </p>
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
