<?php
error_reporting(1);
require_once('tools/mypathdb.php');
?>    
<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gustavo Arias - CV & Portafolio</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Icons -->
		<link href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">
        
          
  <link href="css2/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css2/jquery.ui.core.css" rel="stylesheet" media="screen" />
  <link href="css2/jquery.ui.theme.css" rel="stylesheet" media="screen" />

  <!-- .................................... $scripts .................................... -->
  <script src="js2/jquery.js" language="javascript" type="text/javascript"></script>
  <script src="js2/jquery-ui.js" language="javascript" type="text/javascript"></script>
  <script src="js2/jquery.min.js"></script>
  <script src="js2/modernizr.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>
  <script src="js2/jquery.validate.js" type="text/javascript" language="javascript"></script>
  <script src="js2/jquery.ui.core.js" type="text/JavaScript" language="javascript"></script>
  <script src="js2/jquery.ui.widget.js" type="text/JavaScript" language="javascript"></script>
  <script src="js2/jquery.maskedinput.js" type="text/JavaScript" language="javascript"></script>
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	</head>
    
 
<script language="JavaScript" type="text/JavaScript">	 
    //Metodo para cargar los datos personales
    $("body").on('submit', '#formContacto', function(event) {
		event.preventDefault()
		if ($('#formContacto').valid()) {			
			$.ajax({				
				type: "POST",
				url: "emailContacto.php",
				dataType: "json",
				data: $(this).serialize(),
				success: function(respuesta) {						
					if (respuesta.error == 1) {
						$('#error1').show();
						setTimeout(function() {
						$('#error1').hide();
						}, 1000);
						window.location.href='login.php'; 
					}
					if (respuesta.error == 2) {
						$('#error2').show();
						setTimeout(function() {
						$('#error2').hide();
						}, 1000);
					}					
					if (respuesta.exito == 1) {
						document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';						
					}					
				}
			});
		}
	});	
</script> 

	<body>

		<!-- Search -->
		<!--div class="search-overlay"></div>
		<div class="search">
			<a href="#" class="search-close"><i class="md md-close"></i></a>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h4>Just Start Typing Text and Press Enter</h4>
					<form class="search-form">
						<input type="text" id="search" name="search" class="text-center" />
					</form>
				</div> 
			</div> 
		</div!--> 
		<!-- Slide Out -->
		<div class="slide-out-overlay"></div>
		<div class="slide-out">
			<header class="slide-out-header clearfix">
				<div class="clearfix">
					<a href="#" class="slide-out-close pull-left"><i class="md md-close"></i></a>
					<!--a href="#" class="open-search pull-right"><i class="md md-search"></i></a!-->
					<a href="#" class="slide-out-share pull-right"><i class="md md-more-vert"></i></a>
				</div> <!-- end .clearfix -->
				<!-- Popup -->
				<div class="slide-out-popup">
					<nav class="social-nav">
						<ul class="list-unstyled">
							<li><a href="https://www.facebook.com/gustabin2.0">Facebook</a></li>
							<li><a href="https://twitter.com/gustabin">Twitter</a></li>
							<li><a href="https://ve.linkedin.com/in/gustavo-arias-451a6083">Linkedin</a></li>
								<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                                <div id="SkypeButton_Call_gustabin_1">
									 <script type="text/javascript">
                                     Skype.ui({
                                     "name": "dropdown",
                                     "element": "SkypeButton_Call_gustabin_1",
                                     "participants": ["gustabin"],								 
                                     "imageSize": 24
                                     });
                                     </script>
                                </div>                             
						</ul> <!-- end .list-unstyled -->
					</nav> <!-- end .social-nav -->
				</div> <!-- end .slide-out-popup -->
				<div class="image"><img src="images/head01.png" alt="alt text" class="img-responsive"></div>
				<div class="content">
					<h5>Gustavo Arias</h5>
					<span>Senior Web Programmer</span>
				</div> <!-- end .content -->
				<div class="text-right">
					<a href="cvSystemEngineer.pdf" class="button link-button white icon-left"><i class="md md-file-download"></i>Download Resume</a>
				</div> <!-- end .text-right -->
			</header> <!-- end .slide-out-header -->
			<div class="slide-out-widgets">
				<div class="slide-out-widget">
					<h4>Drink A Coffee With Me Today</h4>
					<form id="formContacto2" method="post" class="form-horizontal contact-form">
						<div class="form-group">
							<label class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="contact-name" name="contact-name" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="contact-email" name="contact-email" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Message</label>
							<div class="col-sm-9">
								<textarea name="contact-message" class="contact-message" rows="3"></textarea>
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3">
								<button type="submit" class="button solid-button purple">Send Message</button>
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="contact-loading alert alert-info form-alert">
							<span class="message">Loading...</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div class="contact-success alert alert-success form-alert">
							<span class="message">Success!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div class="contact-error alert alert-danger form-alert">
							<span class="message">Error!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
					</form> <!-- end contact-form -->
				
                </div> <!-- end .slide-out-widget -->
				<div class="slide-out-widget">
					<h4>Follow On Instagram</h4>
					<div class="instagram">
						<a href="#"><img src="images/instagram01.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="images/instagram02.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="images/instagram03.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="images/instagram04.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="images/instagram05.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="images/instagram06.jpg" alt="alt text" class="img-responsive"></a>
					</div> <!-- end .instagram -->
				</div> <!-- end .slide-out-widget -->
			</div> <!-- end .slide-out-widgets -->
		</div> <!-- end .slide-out -->

		<!-- Header -->
		<header class="header">
			<div class="top clearfix">
				<a href="#section8" class="available"><i class="ion-ios-email-outline"></i><span>Available For Freelance</span></a>
				<div class="right-icons">
					<a href="#" class="open-search header-open-search"><i class="md md-search"></i></a>
					<a href="#" class="download"><i class="md md-file-download"></i></a>
					<a href="#" class="share"><i class="md md-more-vert"></i></a>
				</div> <!-- end .right-icons -->
				<!-- Popup -->
				<div class="popup">
					<nav class="social-nav">
						<ul class="list-unstyled">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Linkedin</a></li>
							<li><a href="#">Google+</a></li>
							<li><a href="#">Behance</a></li>
						</ul> <!-- end .list-unstyled -->
					</nav> <!-- end .social-nav -->
				</div> <!-- end .popup -->
			</div> <!-- end .top -->
			<div class="bottom clearfix">
				<div class="title"><a href="index.html">Home</a></div>
				<div class="header-action-button-wrapper">
					<a href="#" class="header-action-button action-button"><i class="md md-add"></i></a>
				</div> <!-- end .header-action-button-wrapper -->
				<a href="#" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li class="active"><a href="#section1">Home</a></li>
						<li><a href="#section2">About</a></li>
						<li><a href="#section3">Skill</a></li>
						<li><a href="#section4">Experience</a></li>
						<li><a href="#section5">Education</a></li>
						<li><a href="#section6">Work</a></li>
						<!--li><a href="#section7">Blog</a></li!-->
						<li><a href="#section8">Contact</a></li>
					</ul>
				</nav> <!-- end .main-nav -->
			</div> <!-- end .bottom -->
		</header> <!-- end .header -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close">Close <i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<!-- Section Navigation -->
		<div class="section-nav">
			<nav class="section1">
				<a href="#section2" class="forward"><i class="md md-chevron-right"></i></a>
				<a href="#section1" class="backward"><i class="md md-chevron-left"></i></a>
			</nav>
		</div> <!-- end .section-nav -->

		<!-- Sections -->
		<div class="sections">
			<div class="sections-wrapper clearfix">

				<!-- Home -->
				<section id="section1" class="no-padding-bottom active">
					<div class="container">
						<div class="row">
							<div class="col-sm-7 vertical-center padding-fix">
								<h1>Design <sup>&</sup> development </h1>
								<p>Hello, I’m Gustavo Arias. I Have 23 years of experience in Web design and programmer. With extensive knowledge of
current and emerging system/platform Quality Assurance & Testing, design, development, deployment and integration principles, practices and technology.</p>
								<p class="button-row"><a href="cvSystemEngineer.pdf" class="button solid-button purple">Download CV</a></p>
							</div> <!-- end .col-sm-7 -->
							<div class="col-sm-5 vertical-center">
								<img src="images/gustavo.png" alt="Gustavo Arias" class="img-responsive section-img">
							</div> <!-- end .col-sm-5 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

				<!-- About -->
				<section id="section2">
					<div class="container">
						<h2>About Me</h2>
						<div class="row">
							<div class="col-sm-3">
								<img src="images/gustavo02.png" alt="man" class="img-responsive section-img">
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-9">
								<h3 class="small-margin-bottom">Gustavo Arias</h3>
								<h5>Web Programmer & Designer</h5>
								<p>I have proven leadership skills to provide authoritative direction, leadership and guidance on
multiple concurrent system platform development, QA & Testing, delivery and support
projects which impact corporate program delivery.  </p>
								<div class="signature"><img src="images/signature.png" alt="signature" class="img-responsive"></div>
								<ul class="list-unstyled ">
									<li><b>Date Of Birth:</b> 14 Nov 1971</li>
									<li><b>Phone:</b> +1-305-999-1847</li>
									<li><b>Email:</b> gustavoarias@outlook.com</li>
									<li><b>Address:</b> Turmero, Aragua Venezuela.</li>
									<li><b>Website:</b> http://www.tabin.life</li>
								</ul> <!-- end .list-unstyled -->
								<div class="spacer"></div>
								<h3>What I'm Doing</h3>
								<div class="row">
									<div class="col-sm-4">
										<div class="service">
											<div class="icon"><i class="ion-android-laptop"></i></div>
											<h5>Web Programmer & Design</h5>
										</div> <!-- end .service -->
									</div> <!-- end .col-sm-4 -->
									<div class="col-sm-4">
										<div class="service">
											<div class="icon"><i class="ion-ios-speedometer"></i></div>
											<h5>Full Stack</h5>
										</div> <!-- end .service -->
									</div> <!-- end .col-sm-4 -->
									<div class="col-sm-4">
										<div class="service">
											<div class="icon"><i class="ion-settings"></i></div>
											<h5>Adwords campaign</h5>
										</div> <!-- end .service -->
									</div> <!-- end .col-sm-4 -->
								</div> <!-- end .row -->
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

				<!-- Skills -->
				<section id="section3">
					<div class="container">
						<h2>My Skills Values</h2>
						<div class="row">
							<div class="col-sm-6">
								<h4>Technical Skills</h4>
								<label class="progress-bar-label">PHP</label>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
										<span>95%</span>
									</div> <!-- end .progress-bar -->
								</div> <!-- end .progress -->
                                <label class="progress-bar-label">MySQL</label>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
										<span>100%</span>
									</div> <!-- end .progress-bar -->
								</div> <!-- end .progress -->
								
                                <label class="progress-bar-label">Ajax, Json, Jquery</label>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
										<span>80%</span>
									</div> <!-- end .progress-bar -->
								</div> <!-- end .progress -->
								<label class="progress-bar-label">HTML5&amp;CSS3</label>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
										<span>85%</span>
									</div> <!-- end .progress-bar -->
								</div> <!-- end .progress -->
								<label class="progress-bar-label">Javascript</label>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
										<span>67%</span>
									</div> <!-- end .progress-bar -->
								</div> <!-- end .progress -->
                                <label class="progress-bar-label">Bootstrap</label>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">
										<span>79%</span>
									</div> <!-- end .progress-bar -->
								</div> <!-- end .progress -->
                                <label class="progress-bar-label">Photoshop</label>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">
										<span>69%</span>
									</div> <!-- end .progress-bar -->
								</div> <!-- end .progress -->
							</div> <!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<h4>Knowledge</h4>
								<div class="row">
									<div class="col-sm-6">
										<ul class="list-icons purple bold-list">
											<li><i class="md-arrow-forward"></i>LAMP</li>
											<li><i class="md-arrow-forward"></i>Web programming</li>
											<li><i class="md-arrow-forward"></i>Adwords campaign</li>
											<li><i class="md-arrow-forward"></i>Web Development</li>
											<li><i class="md-arrow-forward"></i>Responsive Design</li>
											<li><i class="md-arrow-forward"></i>Graphical Design</li>
											<li><i class="md-arrow-forward"></i>SEO Optimization</li>
										</ul>
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<ul class="list-icons purple bold-list">
											<li><i class="md-arrow-forward"></i>UX and UI Design</li>
											<li><i class="md-arrow-forward"></i>Logo Design</li>
											<li><i class="md-arrow-forward"></i>MySQL query</li>
											<li><i class="md-arrow-forward"></i>Audio Video Editing</li>
											<li><i class="md-arrow-forward"></i>Photography</li>											
                                            <li><i class="md-arrow-forward"></i>Grid and Layout</li>
											<li><i class="md-arrow-forward"></i>Digital Marketing</li>
										</ul>
									</div> <!-- end .col-sm-6 -->
								</div> <!-- end .row -->
							</div> <!-- end .col-sm-6 -->
						</div> <!-- end .row -->
						<div class="spacer"></div>
						<h4>Language Skills</h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="circle-progress-wrapper clearfix">
									<div class="circle-progress">
										<input type="text" class="dial" value="100" data-color="#3B5998" data-from="0" data-to="99" />
									</div> <!-- end .circle-progress -->
									<div class="circle-progress-label-wrapper"><label class="circle-progress-label">Spanish Native</label></div>
								</div> <!-- end .circle-progress-wrapper -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="circle-progress-wrapper clearfix">
									<div class="circle-progress">
										<input type="text" class="dial" value="50" data-color="#3B5998" data-from="0" data-to="80" />
									</div> <!-- end .circle-progress -->
									<div class="circle-progress-label-wrapper"><label class="circle-progress-label">English Advanced</label></div>
								</div> <!-- end .circle-progress-wrapper -->
							</div> <!-- end .col-sm-4 -->							
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

				<!-- Experience -->
				<section id="section4">
					<div class="container">
						<h2>23 Years Experience</h2>
						<div class="experience-timeline">
							<div class="experience-block clearfix">
								<div class="meta">
									<span class="year">2016 - Current</span>
									<span class="company"></span><img src="images/lri.png" width="113" height="67" alt="" style=" margin-left: 60px; margin-right: 50px;" />
								</div> <!-- end .meta -->
								<div class="content">
									<h5>Senior Web Developer</h5>
									<p>have proven leadership skills to provide authoritative direction, leadership and guidance on
multiple concurrent system platform development, QA & Testing, delivery and support
projects which impact corporate program delivery. Implementation and support of systems
and web applications that enable core enterprise-wide real estate processes. Serving as an
expert technical resource and consultant to projects for these applications and provides
advanced level development and support for existing software. Using PHP, AJAX, JSON, jquery,
bootstrap, mysql, javascript, HTML5, CSS3, LAMP, SEO campaign google adwords.</p>
								</div> <!-- end .content -->
								<div class="icon">
									<i class="ion-ios-home-outline"></i>
								</div> <!-- end .icon -->
								<div class="line"></div>
							</div> <!-- end .experience-block -->
							<div class="experience-block clearfix">
								<div class="meta">
									<span class="year">2008 - 2012</span>
									<span class="company">El siglo, c.a.</span><img src="images/elsiglo.jpg" width="113" height="67" alt="" style=" margin-left: 60px; margin-right: 50px;" />
								</div> 
								<!-- end .meta -->
								<div class="content">
									<h5>Systems Manager</h5>
									<p>Provide authoritative technical leadership and expertise in Quality Assurance to oversee the
design, development, deployment and on-going sustainment of high-profile IT platforms
supporting significant business lines and resolve complex systems problems and critical
incidents. Lead and participate in enterprise-wide or cross-jurisdictional projects and activities.</p>
								</div> <!-- end .content -->
								<div class="icon">
									<i class="ion-ios-cart"></i>
								</div> <!-- end .icon -->
								<div class="line"></div>
							</div> <!-- end .experience-block -->
							<div class="experience-block clearfix">
								<div class="meta">
									<span class="year">2008 - 2011</span>
									<span class="company">Netuno International</span><img src="images/netuno.jpg" width="133" height="56" alt="" style=" margin-left: 50px; margin-right: 50px;" />
								</div> <!-- end .meta -->
								<div class="content">
									<h5>Systems Analyst / Programmer</h5>
									<p>Evaluate and modify existing programs/systems as directed by business requirements. ·
Document all procedures to ensure conformance to departmental/corporate standards and
procedures. · Conduct analyses of all defined system specifications to develop all levels of logic
flowcharts for new programs or comprehensive information for data or process models; codes,
prepares test data, tests, and debugs programs. Participate in production support activities in a
maintenance environment.</p>
								</div> <!-- end .content -->
								<div class="icon">
									<i class="ion-ios-color-filter"></i>
								</div> <!-- end .icon -->                                
								<div class="line"></div>
							</div> <!-- end .experience-block -->
                            <div class="experience-block clearfix">
								<div class="meta">
									<span class="year">2002 - 2008</span>
									<span class="company">International Business Link</span>
								</div> <!-- end .meta -->
								<div class="content">
									<h5>Computer Software Engineer</h5>
									<p>I acquired knowledge and experience with systems, QA, testing, design,
development, implementation and integration of principles, practices and
technology.
In addition, I specialize in web-based applications and multi-level technical environments to
advise clients on IT solutions
I knew different operating systems (for example, Windows, LINUX), client / server, server
technology, mainframe, fault tolerant environments and development tools
I have also learned about current methodologies related to system analysis, design,
development, testing and implementation methods, data, applications, networks and security.</p>
								</div> <!-- end .content -->
								<div class="icon">
									<i class="ion-chatbox-working"></i>
								</div> <!-- end .icon -->                                
								<div class="line"></div>
							</div> <!-- end .experience-block -->
                            <div class="experience-block clearfix">
								<div class="meta">
									<span class="year">2000 - 2002</span>
									<span class="company">LAGOVEN, S.A.</span><img src="images/lagoven.jpg" width="113" height="120" alt="" style=" margin-left: 50px; margin-right: 50px;" />
								</div> <!-- end .meta -->
								<div class="content">
									<h5>Desktop Applications Programmer</h5>
									<p>My responsibility was to ensure the application of best practices for the design, development,
quality control and testing, implementation and operation of the technology, for multiple
platforms of complex systems.
As well as developing systems integration and quality assurance strategies,
identifying and evaluating the impacts of new solutions or improvements to
existing services and infrastructure for performance, sustainability and
robustness.
In addition to being able to understand, evaluate and develop solutions to
mitigate risk.
I was able to assess and resolve critical incidents and develop protocols to address or avoid
future incidents.</p>
								</div> <!-- end .content -->
								<div class="icon">
									<i class="ion-code-download"></i>
								</div> <!-- end .icon -->                                
								<div class="line"></div>
							</div> <!-- end .experience-block -->
                            <div class="experience-block clearfix">
								<div class="meta">
									<span class="year">1998 - 2000</span>
									<span class="company">Electricity Of Caracas</span><img src="images/edc.jpg" width="130" height="67" alt="" style=" margin-left: 50px; margin-right: 50px;" />
								</div> <!-- end .meta -->
								<div class="content">
									<h5>Software Engineer/Programmer</h5>
									<p>Evaluate and modify existing programs/systems as directed by business requirements. ·
Document all procedures to ensure conformance to departmental/corporate standards and
procedures. · Conduct analyses of all defined system specifications to develop all levels of logic
flowcharts for new programs or comprehensive information for data or process models; codes,
prepares test data, tests, and debugs programs. Participate in production support activities in a
maintenance environment.</p>
								</div> <!-- end .content -->
								<div class="icon">
									<i class="ion-compass"></i>
								</div> <!-- end .icon -->                                
								<div class="line"></div>
							</div> <!-- end .experience-block -->
                            <div class="experience-block clearfix">
								<div class="meta">
									<span class="year">1993 - 1998</span>
									<span class="company">Central Bank of Venezuela</span><img src="images/bcv.jpg" width="67" height="67" alt="" style=" margin-left: 80px; margin-right: 50px;" />
								</div> <!-- end .meta -->
								<div class="content">
									<h5>Systems consultant</h5>
									<p>Evaluate and modify existing programs/systems as directed by business requirements. ·
Document all procedures to ensure conformance to departmental/corporate standards and
procedures. · Conduct analyses of all defined system specifications to develop all levels of logic
flowcharts for new programs or comprehensive information for data or process models; codes,
prepares test data, tests, and debugs programs. Participate in production support activities in a
maintenance environment.</p>
								</div> <!-- end .content -->
								<div class="icon">
									<i class="ion-document-text"></i>
								</div> <!-- end .icon -->
							</div> <!-- end .experience-block -->                           
						</div> <!-- end .experience-timeline -->

						<!-- Testimonials -->
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="testimonial-slider owl-carousel">
									<div>
										<div class="image"><img src="images/testimonial.jpg" alt="alt text"></div>
										<div class="sep"></div>
										<p>" Awesome to work with. Incredibly organized, easy to communicate with, responsive with next iterations, and beautiful work. "</p>
										<span class="author">Francisco javier Ugalde, Developer PHP in Rootstack </span>
									</div>
									<div>
										<div class="image"><img src="images/instagram03.jpg" alt="alt text"></div>
										<div class="sep"></div>
										<p>" Dynamic person, intelligent and relates very well to the whole organization. "</p>
										<span class="author">Luis Miguel Gallo, CEO Jupiter Consultores, C.A.</span>
									</div>
									<div>
										<div class="image"><img src="images/comment01.jpg" alt="alt text"></div>
										<div class="sep"></div>
										<p>" When the problems were difficult we were calm because we knew that their support was unconditional and always found the solutions. "</p>
										<span class="author">Jesus Reyes, Developer in 	

    TV-SOFTWARE</span>
									</div>
								</div> <!-- end .testimonial-slider -->
							</div> <!-- end .col-sm-8 -->
						</div> <!-- end .row -->

					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

				<!-- Education -->
				<section id="section5">
					<div class="container">
						<h2>Educational Value</h2>
						<div class="education clearfix">
							<div class="item">
								<div class="marker"></div>
								<div class="content">
									<span>University Bicentenaria de Aragua</span>
									<h4>System Engineer</h4>
								</div>
								<div class="year">1988 - 1993</div>
							</div> <!-- end item -->
							<div class="item">
								<div class="marker"></div>
								<div class="content">
									<span>Epson</span>
									<h4>687 Supporting MS Windows NT 4.0</h4>
								</div>
								<div class="year">1996</div>
							</div> <!-- end item -->
                            <div class="item">
								<div class="marker"></div>
								<div class="content">
									<span>Microsoft</span>
									<h4>Administering MS Windows NT 4.0</h4>
								</div>
								<div class="year">1999</div>
							</div> <!-- end item -->
							<div class="item">
								<div class="marker"></div>
								<div class="content">
									<span>Microsoft</span>
									<h4>578 Networking Essentials</h4>
								</div>
								<div class="year">1999</div>
							</div> <!-- end item -->					
                            <div class="line"></div>
						</div> <!-- end .education -->
                        <div class="education clearfix">
							<div class="item">
								<div class="marker"></div>
								<div class="content">
									<span>Microsoft Technical education center</span>
									<h4>973 MS exchange server 5.5</h4>
								</div>
								<div class="year">1999</div>
							</div> <!-- end item -->
                            
							<div class="line"></div>
						</div> <!-- end .education -->
                        
                        <div class="col-sm-3" id="cafe">
								<img src="images/cafe.jpeg" alt="man" class="img-responsive section-img">
						</div> <!-- end .col-sm-3 -->

						<h2>Hobbies & Interest</h2>
						<div class="row">
							<div class="col-sm-2 col-sm-offset-1 col-xs-6">
								<div class="icon-box">
									<div class="icon"><i class="ion-film-marker"></i></div>
									<h6>Filmmaker</h6>
								</div> <!-- end .icon-box -->
							</div> <!-- end .col-sm-2 -->
                            <div class="col-sm-2 col-xs-6">
								<div class="icon-box">
									<div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
									<h6>Writer</h6>
								</div> <!-- end .icon-box -->
							</div> <!-- end .col-sm-2 -->
							<div class="col-sm-2 col-xs-6">
								<div class="icon-box">
									<div class="icon"><i class="ion-easel"></i></div>
									<h6>Paint</h6>
								</div> <!-- end .icon-box -->
							</div> <!-- end .col-sm-2 -->	
							<div class="col-sm-2 col-xs-6">
								<div class="icon-box">
									<div class="icon"><i class="ion-android-bicycle"></i></div>
									<h6>Bike</h6>
								</div> <!-- end .icon-box -->
							</div> <!-- end .col-sm-2 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

				
<!-- Portfolio -->
                
                <!-- Portfolio -->
				<section id="section6">
					<div class="container">
						<h2>Portfolio</h2>
						<div class="portfolio-wrapper">
							<div id="portfolio-filters" class="portfolio-filters">
								<!--button class="button solid-button white-purple small" data-filter="*">Show All</button>
								<!--button class="button solid-button white-purple small" data-filter=".branding">Branding</button>
								<button class="button solid-button white-purple small" data-filter=".print">Print</button>
								<button class="button solid-button white-purple small" data-filter=".motion">Motion</button>
								<button class="button solid-button white-purple small" data-filter=".websites">Websites</button!-->
							</div>
							<div id="portfolio" class="portfolio">
                               <div class="item motion">
									<img src="images/portfolio13.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Luxury Rentals International</span>
											<span class="category">Website Dynamic</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item motion">
									<img src="images/portfolio18.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=18" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Arepa Herald</span>
											<span class="category">Newspaper online</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                <div class="item motion">
									<img src="images/portfolio14.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=2" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Medway Care</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                 <div class="item print">
									<img src="images/portfolio03.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=3" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Essuscripcion</span>
											<span class="category">Website Dynamic</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                            	<div class="item print branding">
									<img src="images/portfolio01.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=4" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">El siglo</span>
											<span class="category">Newspaper Online</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item print branding">
									<img src="images/portfolio20.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=20" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">MiamiNews24</span>
											<span class="category">Newspaper Online</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item branding print">
									<img src="images/portfolio02.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=5" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Esavisos</span>
											<span class="category">Website Dynamic</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                               
                                <div class="item motion">
									<img src="images/portfolio06.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=6" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">CitaDr</span>
											<span class="category">Website Dynamic</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->	
                                
                                <div class="item motion">
									<img src="images/portfolio15.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=7" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Capri club</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->							
								<div class="item motion">
									<img src="images/portfolio08.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=8" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Expensive Gratuity</span>
											<span class="category">Filmmaker</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item motion">
									<img src="images/portfolio09.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=9" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">La guía completa de google mucho más que solo búsqueda</span>
											<span class="category">Book</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                <div class="item motion">
									<img src="images/portfolio10.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=10" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Fallar para triunfar</span>
											<span class="category">Book</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                 <div class="item print branding websites">
									<img src="images/portfolio07.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=11" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Christina Dieckmann</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                 <div class="item print branding websites">
									<img src="images/portfolio16.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=12" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Graciano Services</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								 <div class="item print branding websites">
									<img src="images/portfolio19.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=19" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Farley Laserlabs</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                
                                
                                <!-- *****************************  Websites Inactivos ************************************!-->
								<div class="item print">
									<img src="images/portfolio11.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=13" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Pamplonas Deli's </span>
											<span class="category">Website Dynamic</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item motion">
									<img src="images/portfolio12.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=16" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Citrom</span>
											<span class="category">Website Dynamic</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                <div class="item print branding websites">
									<img src="images/portfolio04.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=15" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Maveca</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                <div class="item print branding websites">
									<img src="images/portfolio05.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=14" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">La regional ca de seguros</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                <div class="item print branding websites">
									<img src="images/portfolio17.jpg" alt="alt text" class="img-responsive">
									<a href="single-portfolio.php?portafolio=17" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Yunier Gomez Torres</span>
											<span class="category">Website</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
                                
                                
                                
                                
								
							</div> <!-- end .portfolio -->
							<!--div class="portfolio-load-more">
								<a href="#section9" class="button solid-button white icon-right">Load More Work<i class="md-refresh"></i></a>
							</div> <!-- end .portfolio-load-more -->
						</div> <!-- end .portfolio-wrapper -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->
                


				<!-- Blog -->
				<!--section id="section7">
					<div class="container">
						<h2>Blog Post</h2>
						<div class="blog-posts masonry" id="blog-masonry">
							<div class="blog-grid-sizer"></div>
							<div class="blog-post image-left">
								<div class="inner">
									<a href="single-blog-post.html"><div class="image" style="background-image: url('images/blog-post-image01.jpg');"></div></a>
									<div class="content">
										<span class="date">March 14, 2015</span>
										<h4><a href="single-blog-post.html">We Support Any Type Of Design</a></h4>
										<footer>
											<span class="comments-link"><a href="single-blog-post.html">3 Comments</a></span>
											<span class="share-link"><a href="single-blog-post.html"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> 
								</div> 
							</div> 
							<div class="blog-post">
								<div class="inner">
									<div class="content">
										<span class="date">March 15, 2015</span>
										<h4><a href="single-blog-post.html">We Give 99% Satisfy In All Work</a></h4>
										<footer>
											<span class="comments-link"><a href="single-blog-post.html">7 Comments</a></span>
											<span class="share-link"><a href="single-blog-post.html"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> 
								</div> 
							</div> 
							<div class="blog-post image-top">
								<div class="inner">
									<a href="single-blog-post.html"><div class="image" style="background-image: url('images/blog-post-image02.jpg');"></div></a>
									<div class="content">
										<span class="date">March 13, 2015</span>
										<h4><a href="single-blog-post.html">We Won CSS Design Of The Year</a></h4>
										<footer>
											<span class="comments-link"><a href="single-blog-post.html">4 Comments</a></span>
											<span class="share-link"><a href="single-blog-post.html"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> 
								</div> 
							</div> 
							<div class="blog-post image-top">
								<div class="inner">
									<a href="single-blog-post.html"><div class="image" style="background-image: url('images/blog-post-image03.jpg');"></div></a>
									<div class="content">
										<span class="date">March 12, 2015</span>
										<h4><a href="single-blog-post.html">How to Launch Website Easily</a></h4>
										<footer>
											<span class="comments-link"><a href="single-blog-post.html">10 Comments</a></span>
											<span class="share-link"><a href="single-blog-post.html"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> 
								</div>
							</div> 
							<div class="blog-post image-right">
								<div class="inner">
									<a href="single-blog-post.html"><div class="image" style="background-image: url('images/blog-post-image04.jpg');"></div></a>
									<div class="content">
										<span class="date">March 11, 2015</span>
										<h4><a href="single-blog-post.html">Music Is Help To Relax Body And Mind</a></h4>
										<footer>
											<span class="comments-link"><a href="single-blog-post.html">5 Comments</a></span>
											<span class="share-link"><a href="single-blog-post.html"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> 
								</div> 
							</div> 
							<div class="blog-post">
								<div class="inner">
									<div class="content">
										<span class="date">March 10, 2015</span>
										<h4><a href="single-blog-post.html">We Support any Type of Design</a></h4>
										<footer>
											<span class="comments-link"><a href="single-blog-post.html">3 Comments</a></span>
											<span class="share-link"><a href="single-blog-post.html"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> 
								</div> 
							</div> 
							<div class="blog-post image-left">
								<div class="inner">
									<a href="single-blog-post.html"><div class="image" style="background-image: url('images/blog-post-image05.jpg');"></div></a>
									<div class="content">
										<span class="date">March 9, 2015</span>
										<h4><a href="single-blog-post.html">Change Your Domain Without Risk</a></h4>
										<footer>
											<span class="comments-link"><a href="single-blog-post.html">6 Comments</a></span>
											<span class="share-link"><a href="single-blog-post.html"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> 
								</div> 
							</div> 
						</div> 
						<div class="blog-load-more">
							<a href="single-blog-post.html" class="button solid-button white icon-right">Load More Posts<i class="md-refresh"></i></a>
						</div> 
					</div> 
				</section!--> <!-- end #section1 -->

				<!-- Contact -->
				<section id="section8">
					<div class="container">
						<h2>Get In Touch With Me</h2>
						<div class="row">
							<div class="col-sm-5">
								<h5>Contact Address</h5>
								<ul class="list-icons list-unstyled">
									<li><i class="ion-ios-location-outline"></i>Turmero, <br />Aragua Venezuela.</li>
									<li><i class="ion-iphone"></i>Phone: +58 424-375-5128</li>
									<li><i class="ion-ios-email-outline"></i>Email: <a href="mailto:gustavoarias@outlook.com">gustavoarias@outlook.com</a></li>
									<li><i class="ion-ios-home-outline"></i>Website: <a href="http://www.tabin.life">www.tabin.life</a></li>
								</ul>
								<div class="spacer"></div>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/gustabin2.0" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/gustabin" class="social-icon"><i class="fa fa-twitter"></i></a>									
                                <a href="https://ve.linkedin.com/in/gustavo-arias-451a6083" class="social-icon"><i class="fa fa-linkedin"></i></a>
                            </div> <!-- end .social-icons -->
								<div class="spacer"></div>
							</div>
							<div class="col-sm-7">
								<h5>Contact Form</h5>
								<!--form id="formContacto" method="post" class="form-horizontal contact-form"!-->
                                <form class="form-vertical" id="formContacto">
									<div class="form-group">
										<label class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="contact-name" name="contact-name" />
										</div> <!-- end .col-sm-10 -->
									</div> <!-- end .form-group -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="contact-email" name="contact-email" />
										</div> <!-- end .col-sm-10 -->
									</div> <!-- end .form-group -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Message</label>
										<div class="col-sm-10">
											<textarea name="contact-message" class="contact-message" rows="3"></textarea>
										</div> <!-- end .col-sm-10 -->
									</div> <!-- end .form-group -->
									<div class="form-group">
										<div class="col-sm-10 col-sm-offset-2">
											<button type="submit" class="button solid-button purple">Send Message</button>
										</div> <!-- end .col-sm-10 -->
									</div> <!-- end .form-group -->
									<div class="contact-loading alert alert-info form-alert">
										<span class="message">Loading...</span>
										<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
									</div>
									
<div class="modal" id="light" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#99CA3D; color:black;">	
                <h4 class="modal-title" id="myModalLabel">
                    ¡Email sent!
                </h4>
            </div>
            <div class="modal-body">
                The info has been sent successfully. <br>                
            </div>
            <div class="modal-footer">			
                    <a href = "amenities.php?id=<?php echo $villaId ?>" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"> 
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                   Ok
                </button> 
                    </a>					
            </div>
        </div>						
    </div>					
 </div>
									<div class="contact-error alert alert-danger form-alert">
										<span class="message">Error!</span>
										<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
									</div>
								</form> <!-- end contact-form -->
							</div>
						</div>
						<div class="map" id="map"></div>
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->
                
                

                


			</div> <!-- end .sections-wrapper -->
		</div> <!-- end .sections -->
		
		<!-- Footer -->
		<footer class="footer">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h4>Address</h4>
							<p>Turmero,<br />Aragua Venezuela.</p>
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<h4>Connect</h4>
							<div class="social-icons">
								<a href="https://www.facebook.com/arepaherald" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/arepaherald" class="social-icon"><i class="fa fa-twitter"></i></a>									
                                <a href="https://ve.linkedin.com/in/gustavo-arias-451a6083" class="social-icon"><i class="fa fa-linkedin"></i></a>
							</div> <!-- end .social-icons -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<h4>Contact</h4>
							<p>Tel: +58 424-375-5128<br />Mail: gustavoarias@outlook.com</p>
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .footer -->
			<div class="bottom">Copyright &copy; Gustavo Arias. All Rights Reserved.</div> <!-- end .bottom -->
		</footer> <!-- end .footer -->

		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- SmoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- jQuery Knob -->
		<script src="js/jquery.knob.min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<!-- Images Loaded -->
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>
	</body>
</html>