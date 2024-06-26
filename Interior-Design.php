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
							<p><strong>Interior Design</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
								<section id="content">
										<a href="#" class="image fit"><img src="career_img/Interior.jpg" alt="" /></a>
                    <h3></h3>
										<p>Interior designers focus on the aesthetics of spaces. They work with clients to gather information about the vision for the rooms so that the colors, textures, and shapes are pleasing and inviting. In addition to creating visually appealing spaces, interior designers work to integrate functionality, safety, and sustainability into their work.

Whether working with an empty space or redesigning one, your goal is to match its intended purpose in bold, creative, and healthy ways. You’ll imagine what employees will feel like walking into a workspace or what will draw parents and their children to a family room. 

As an interior design major, you’ll take courses that prepare you to interact with clients. You’ll learn how to meet the demands of different perspectives, personalities, and artistic palates. Your goal is to satisfy your clients by designing a visually balanced, harmonious, functional, sustainable, and safe space for all its occupants.</p>
						

										<div class="line"></div>
										<h3><strong>What does a student majoring in Interior Design study? </strong></h3>
<p>Introduction to Interior Design,Sustainable Systems,Textiles and Soft Materials
<br>Design Computer Imaging, Visualization and Interior Studio</br></p>
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
                    <p><a href="cur/inter.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
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
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/Interior1.jpg" alt="" /></a>
											
											<p>As an interior design major, you’ll take courses that prepare you to interact with clients. You’ll learn how to meet the demands of different perspectives, personalities, and artistic palates. Your goal is to satisfy your clients by designing a visually balanced, harmonious, functional, sustainable, and safe space for all its occupants.</p>
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
