<!DOCTYPE html>
<html lang="en"> 
<head>
	<?php //php variables
		//header
		$name = "Leo Foy";
		$jobTitle = "Application Engineer";
		$email = "lfoy306@gmail.com";
		$phone = "(802)622-4425";
		$linkedIn = "www.linkedin.com/in/leo-foy/";
		$git = "github.com/LeoFoy";
		
		//experience
		$summary = "I achieved my associates degree in Computer and Information Technology alongside a work-study program called Bit502 where I apprenticed and interned at Waystar Inc. for 2 years. I love traveling, some of the places I have been are the Grand Canyon, Peru, and Greece.";
		//waystar
		$waystar = "Waystar";
		$wTitle = "Software Developer Intern";
		$wTime = "2021 - 2023";
		$wDesc = "Assisting in the maintenence of the Denials Waystar Product";
			//Achievement List items
		$wAL1 = "Fixed several bugs in main product such as paging issues";
		$wAL2 = "Changed archival file directories";
		$wAL3 = "Participated in routine and rigorous testing of product after push";
			//Tech List
		$wTL1 = "C#";
		$wTL2 = "JavaScript";
		$wTL3 = "jQuery";
		$wTL4 = "HTML/CSS";
		$wTL5 = "SQL";

		//Landscaping
		$lml = "Louisville Metro Landscaping";
		$lTitle = "Landscaping Assistant";
		$lTime = "July 2020-August2020";
		$lDesc = "Assist in landscaping and park upkeep such as pruning, watering, and cutting down trees; digging holes; and weeding";

		//Skills
		$s1 = "C#";
		$s2 = "Python";
		$s3 = "Javascript";
		$s4 = "SQL";
		$s5 = "HTML/CSS";
		$s6 = "DevOps";
		$s7 = "Git";
		$s8 = "Azure";
		$s9 = "MVC Websites";

		//Education
		$deg = "Associate in Applied Science (CIT)";
		$degOrg = "Jefferson Community and Technical College";
		$degTime = "2021 - 2023";
		$lang = "English";

		//interests
		$interest1 = "Video-Gaming";
		$interest2 = "Snowboarding";
		$interest3 = "Traveling";

		//Projects
		$progTitle1 = "Python Speeding Citation Program";
		$progTitle2 = "Java PackBins";
		$progTitle3 = "MVC Website";

		$progDesc1 = "A python program implementing an sqlite database to collect and display speeding citations.";
		$progDesc2 = "A simple best fit bin packing algorithm written in Java";
		$progDesc3 = "A simple website using the Model-View-Controller framework, also implements business logic to access an sql database";

		$pyGit = "github.com/LeoFoy/PythonCitationProg";
		$javaGit = "github.com/LeoFoy/Java-packBins";
		$mvcGit = "github.com/LeoFoy/MVC-Website";

	?>
    <title><?php echo $name ?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Leo Foy's resume">
    <meta name="author" content="Leo Foy">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css"> 
	
	

</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/leo-profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $name; ?></h1>
							    <div class="title mb-3"><?php echo $jobTitle; ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $email; ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $phone; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $linkedIn; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $git; ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $summary; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $wTitle; ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $waystar; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo $wTime; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $wDesc; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <ul>
											    <li><?php echo $wAL1; ?></li>
											    <li><?php echo $wAL2; ?></li>
											    <li><?php echo $wAL3; ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $wTL1; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $wTL2; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $wTL3; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $wTL4; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $wTL5; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $lTitle; ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $lml; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo $lTime; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $lDesc; ?></p>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $s1; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $s2; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $s3; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $s4; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $s5; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $s6; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $s7; ?></span></li>
										<li class="list-inline-item"><span class="badge badge-light"><?php echo $s8; ?></span></li>
										<li class="list-inline-item"><span class="badge badge-light"><?php echo $s9; ?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $deg; ?></div>
								        <div class="resume-degree-org"><?php echo $degOrg; ?></div>
								        <div class="resume-degree-time"><?php echo $degTime; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $lang; ?></span> <small class="text-muted font-weight-normal">(Native)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo $interest1; ?></li>
								    <li class="mb-1"><?php echo $interest2; ?></li>
								    <li class="mb-1"><?php echo $interest3; ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><?php echo $progTitle1; ?></h5>
									<p class="card-text"><?php echo $progDesc1; ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo $pyGit; ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><?php echo $progTitle2; ?></h5>
									<p class="card-text"><?php echo $progDesc2; ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo $javaGit; ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><?php echo $progTitle3; ?></h5>
									<p class="card-text"><?php echo $progDesc3; ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo $mvcGit; ?></a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $name; ?></small>
    </footer>

    

</body>
</html> 

