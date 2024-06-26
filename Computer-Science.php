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
							<p><strong>Computer Science</strong></p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="career_img/sci.jpg" alt="" /></a>
                    <h3></h3>
										<p>As a computer science major, programming courses will be a key part of your studies. These classes cover languages such as C++ and Java, and introduce you to the precise thinking behind computer programming. You’ll learn how to solve problems by translating a question into instructions a computer can follow to come up with the answers. And you’ll explore what goes on inside a computer when it’s solving a problem. </p>
										<div class="line"></div>
										<p>If you study computer science, you may learn how to design computer programs that allow humans and computers to speak to one another. Keep in mind, your work is more likely to help a vision-impaired person than a captain navigating the universe, but you never know.

Computer science majors learn about computer systems and the way humans and computers interact from a scientific perspective. Instruction includes programming and the theory and design of software.</p>
<div class="line"></div>
                    <p><strong>Did You Know?</strong></p>
								<blockquote>While programming is essential to studying computer science, the major can prepare you for careers that involve no programming at all.</blockquote>
								<div class="line"></div>		
								<h3><strong>It Helps To Be...</strong></h3>
										<p>Precise and mathematical but also able to think abstractly. In order to solve problems, you’ll need to think like a human and like a computer at the same time. This requires creativity, imagination, and the ability to think logically.</p>
										<div class="line"></div>
										<p><strong>Are You Ready To...?</strong>

</p>
                    <ul>
											<li>Complete an internship designing Web pages, developing software, testing software, or building other computer skills</li>
											<li>Build teamwork skills and friendships while problem solving with other students</li>
											<li>Regularly stay up until all hours trying to debug your computer programming</li>
										</ul>
								
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

                    <p><a href="cur/sc.pdf" target="_blank" class="btn btn-dark active float-right">specialty curriculum</a> 
                    </p>


									</section>
                  
							</div>
              
				
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section>
										<section>
											<h3>Your Major Matters</h3>
											<p>Choosing a major could be an even more important decision than which college to choose. Studies have shown that students who choose a major that is a good fit for them tend to get better grades and are also more likely to graduate on time. Your future salary also largely depends on your major, even more so than the college you choose.</p>
										
											
										</section>
										
										<section>
											<a href="controller.php?page=article2" class="image fit"><img src="career_img/Sci.webp" alt="" /></a>
											<h3>Computer Science vs Information Technology</h3>
											<p>Computer science and information technology (IT) are two distinct subjects, despite their many similarities. Generally, computer science refers to designing and building computers and computer programs. Information technology, refers to maintaining and troubleshooting those computers and their networks, systems, and databases to ensure they run smoothly.</p>
											
											
										</section>
									</section>
                 
						</header>

				</section>
		

		</div>

		<!-- Scripts -->
  </div>
  </div>

  <?php  include('footer.php')?>