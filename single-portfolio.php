<?php
require_once('tools/mypathdb.php');
$portafolio_id=$_GET['portafolio'];

  //=========================Consultar la tabla websites ============================================
  $query=("select * from tbl_websites WHERE we_id= '$portafolio_id'");   
  $resultado = mysql_query($query,$dbConn);
  while($data_web = mysql_fetch_array($resultado)) 
	{
    $imagen= $data_web['we_imagen'];
	$imagen2= $data_web['we_imagen2'];
	$imagen3= $data_web['we_imagen3'];	
	$descripcion = utf8_encode($data_web['we_descripcion']);
	$objetivo =  utf8_encode($data_web['we_objetivo']);
	$tecnologia1 = utf8_encode($data_web['we_tecnologia1']);
	$tecnologia2 = utf8_encode($data_web['we_tecnologia2']);
	$tecnologia3 = utf8_encode($data_web['we_tecnologia3']);
	$cliente = utf8_encode($data_web['we_cliente']);
	$website = utf8_encode($data_web['we_website']);
	$anterior = $portafolio_id-1;
	$siguiente = $portafolio_id+1;
 	}
 mysql_close();
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
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	</head>


<script language="JavaScript" type="text/JavaScript">		
    //Metodo para cargar el formulario 
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
			  $('#error').show();
			setTimeout(function() {
			  $('#error1').hide();
			}, 3000);
		    }
			 
			if (respuesta.exito == 1) {
			  $('#bannerInferior').hide();
			  $('#bannerInferiorExitoso').show();			  			  			  
			  //window.location.href='http://www.oikosplus.com/luxury/enviarEmail.php?Page=index&Id=<?php echo $_SESSION["Id"]?>';
			  //window.location.href='enviarEmail.php?Page=index&Id=<?php //echo $_SESSION["Id"]?>';
			  document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
		    }						    
		}
	    });
	}
	});
</script>


	<body>

		<!-- Search -->
		<div class="search-overlay"></div>
		<div class="search">
			<a href="#" class="search-close"><i class="md md-close"></i></a>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h4>Just Start Typing Text and Press Enter</h4>
					<form class="search-form">
						<input type="text" id="search" name="search" class="text-center" />
					</form> <!-- end .search-form -->
				</div> <!-- end .col-sm-6 -->
			</div> <!-- end .row -->
		</div> <!-- end .row -->
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
					<form id="formContacto" method="post" class="form-horizontal contact-form">
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
				<a href="#section8" class="available"><i class="ion-ios-email-outline"></i><span>Available For Remote Job</span></a>
				<div class="right-icons">
					<!--a href="#" class="open-search header-open-search"><i class="md md-search"></i></a!-->
					<a href="cvSystemEngineer.pdf" class="download"><i class="md md-file-download"></i></a>
					<a href="#" class="share"><i class="md md-more-vert"></i></a>
				</div> <!-- end .right-icons -->
				<!-- Popup -->
				<div class="popup">
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
				</div> <!-- end .popup -->
			</div> <!-- end .top -->
			<div class="bottom clearfix">
				<div class="title"><a href="index.html">Gustavo Arias</a></div>
				<div class="header-action-button-wrapper">
					<a href="#" class="header-action-button action-button"><i class="md md-add"></i></a>
				</div> <!-- end .header-action-button-wrapper -->
				<a href="#" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li class="active"><a href="index.php#section1">Home</a></li>
						<li><a href="index.php#section2">About</a></li>
						<li><a href="index.php#section3">Skill</a></li>
						<li><a href="index.php#section4">Experience</a></li>
						<li><a href="index.php#section5">Education</a></li>
						<li><a href="index.php#section6">Work</a></li>
						<!--li><a href="index.php#section7">Blog</a></li!-->
						<li><a href="index.php#section8">Contact</a></li>
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
				<a href="index.php#section2" class="forward"><i class="md md-chevron-right"></i></a>
				<a href="index.php#section1" class="backward"><i class="md md-chevron-left"></i></a>
			</nav>
		</div> <!-- end .section-nav -->

		<!-- Sections -->
		<div class="sections">
			<div class="sections-wrapper clearfix">

				<!-- Single Portfolio -->
				<section class="active">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<div class="portfolio-slider owl-carousel">
									<div><img src="<?php echo $imagen ?>" alt="alt text" class="img-responsive"></div>
									<div><img src="<?php echo $imagen2 ?>" alt="alt text" class="img-responsive"></div>
									<div><img src="<?php echo $imagen3 ?>" alt="alt text" class="img-responsive"></div>
								</div> <!-- end .portfolio-slider -->
								<div class="row related-images">
									<a href="<?php echo "http://".$website ?>">
                                    <div class="col-sm-6"><img src="<?php echo $imagen2 ?>" alt="alt text" class="img-responsive"></div>
									<div class="col-sm-6"><img src="<?php echo $imagen3 ?>" alt="alt text" class="img-responsive"></div>
                                    </a>
								</div> <!-- end .row -->
							</div> <!-- end .col-sm-8 -->
							<div class="col-sm-4">
							<p class="button-row portfolio-button-row">
                            	<?php if ($anterior>0) { ?>
                                <a href="single-portfolio.php?portafolio=<?php echo $anterior ?>" class="button solid-button white">Prev</a>
                                <?php } ?>
								<?php if ($siguiente<17) { ?>
                                <a href="single-portfolio.php?portafolio=<?php echo $siguiente ?>" class="button solid-button purple">Next</a>
                                <?php } ?>
                            </p>
								<div class="portfolio-details">									
                                    <div class="portfolio-meta">
										<a href="<?php echo "http://".$website ?>"><span><?php echo $website ?></span></a>								
									</div> <!-- end .portfolio-meta -->
									<p><?php echo $descripcion ?></p>
                                    <div class="portfolio-meta">
										<span>Client:</span>
										<?php echo $cliente ?>
									</div> <!-- end .portfolio-meta -->
									<div class="portfolio-meta">
										<span>Objetive:</span>										
                                        <?php echo $objetivo ?>
									</div> <!-- end .portfolio-meta -->									
									<div class="portfolio-meta">
										<span>Technology:</span>
										<?php echo $tecnologia1 ?></br>
                                        <?php echo $tecnologia2 ?></br>
                                        <?php echo $tecnologia3 ?></br>
									</div> <!-- end .portfolio-meta -->
									
									<p><a href="http://<?php echo $website ?>" class="button solid-button purple">Visit Website</a></p>
								</div> <!-- end .portfolio-details -->
							</div> <!-- end .col-sm-4 -->
						</div> <!-- end .row -->
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