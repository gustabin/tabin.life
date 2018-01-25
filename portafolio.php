<?php 
session_start();
include "header.php";
require_once('tools/mypathdb.php');
$portafolio_id=$_GET['portafolio'];

		

  //=========================Consultar la tabla webmaster ============================================
  $query=("select * from tbl_websites WHERE we_id= '$portafolio_id'");   
  $resultado = mysql_query($query,$dbConn);
  while($data_web = mysql_fetch_array($resultado)) 
{
    $imagen= $data_web['we_imagen'];	
	//echo $imagen;
	$descripcion = utf8_encode($data_web['we_descripcion']);
	//echo $descripcion;
	$objetivo =  utf8_encode($data_web['we_objetivo']);
	$tecnologia1 = utf8_encode($data_web['we_tecnologia1']);
	$tecnologia2 = utf8_encode($data_web['we_tecnologia2']);
	$tecnologia3 = utf8_encode($data_web['we_tecnologia3']);
	$cliente = utf8_encode($data_web['we_cliente']);
	$website = utf8_encode($data_web['we_website']);
	$trabajoRelacionado = $portafolio_id+1;
	
	
 }
// var_dump($descripcion);
//	die();
 mysql_close();
?> 


			<div role="main" class="main">
				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Portfalio</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2><?php echo $website ?></h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					
					<div class="portfolio-title">
					  <div class="row">
							<div class="portfolio-nav-all col-md-1">
								<a href="index.php" rel="tooltip" data-original-title="Back to list"><i class="fa fa-th"></i></a>
							</div>
							<div class="col-md-10 center">
								<h2 class="shorter"><?php echo $cliente ?></h2>
							</div>
							<div class="portfolio-nav col-md-1">
								<a href="index.php" class="portfolio-nav-prev" rel="tooltip" data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
								<a href="index.php" class="portfolio-nav-next" rel="tooltip" data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>

					<hr class="tall">

					<div class="row">
						<div class="col-md-4">

							<div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
								<div>
									<div class="thumbnail">
										<img alt="" class="img-responsive" src="<?php echo $imagen ;?>">
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<img alt="" class="img-responsive" src="images/projects/<?php echo $portafolio_id?>-1.jpg">
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<img alt="" class="img-responsive" src="images/projects/<?php echo $portafolio_id?>-2.jpg">
									</div>
								</div>                                
							</div>

						</div>

						<div class="col-md-8">
							<div class="portfolio-info">
								<div class="row">
									<div class="col-md-12 center">
										<ul>											
											<li>
												<i class="fa fa-tags"></i> <a href="#">site:</a>, <a href="http://<?php echo $website ?>"><?php echo $website ?></a>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<h4>Proyecto <strong>Descripción</strong></h4>
							<p class="taller"><?php echo $descripcion ?></p>
                            <h4>Objetivo </h4>
                            <p class="taller"><?php echo $objetivo ?></p>
							<a href="http://<?php echo $website ?>" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Ver en vivo</a> <span class="arrow hlb" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

							<ul class="portfolio-details">
								<li>
									<p><strong>Tecnologías:</strong></p>
									<ul class="list list-skills icons list-unstyled list-inline">
										<li><i class="fa fa-check-circle"></i><?php echo $tecnologia1 ?></li>
										<li><i class="fa fa-check-circle"></i><?php echo $tecnologia2 ?></li>
										<li><i class="fa fa-check-circle"></i><?php echo $tecnologia3 ?></li>
									</ul>
								</li>
								<li>
									<p><strong>Cliente:</strong></p>
									<p><?php echo $cliente ?></p>
								</li>
							</ul>

						</div>
					</div>

					<hr class="tall" />

					<div class="row">
						<div class="col-md-12">
							<h3>Trabajos <strong>relacionados</strong></h3>
						</div>

						<ul class="portfolio-list">
                        	<?php if ($trabajoRelacionado == 13) {
									$trabajoRelacionado=1;
									}
							?>
							<li class="col-md-3 col-xs-6">
								<div class="portfolio-item thumbnail">
									<a href="portafolio.php?portafolio=<?php echo $trabajoRelacionado?>" class="thumb-info">
										<img alt="" class="img-responsive" src="img/projects/<?php echo $trabajoRelacionado?>.jpg">
										
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</a>
								</div>
							</li>
                            <?php $trabajoRelacionado = $trabajoRelacionado +1?>
                            <?php if ($trabajoRelacionado == 13) {
									$trabajoRelacionado=1;
									}
							?>
							<li class="col-md-3 col-xs-6">
								<div class="portfolio-item thumbnail">
									<a href="portafolio.php?portafolio=<?php echo $trabajoRelacionado?>" class="thumb-info">
										<img alt="" class="img-responsive" src="img/projects/<?php echo $trabajoRelacionado?>.jpg">
										
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</a>
								</div>
							</li>                            
                            <?php $trabajoRelacionado = $trabajoRelacionado +1?>
                            <?php if ($trabajoRelacionado == 13) {
									$trabajoRelacionado=1;
									}
							?>
							<li class="col-md-3 col-xs-6">
								<div class="portfolio-item thumbnail">
									<a href="portafolio.php?portafolio=<?php echo $trabajoRelacionado?>" class="thumb-info">
										<img alt="" class="img-responsive" src="img/projects/<?php echo $trabajoRelacionado?>.jpg">
										
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</a>
								</div>
							</li>
                            <?php $trabajoRelacionado = $trabajoRelacionado +1?>
                            <?php if ($trabajoRelacionado == 13) {
									$trabajoRelacionado=1;
									}
							?>
							<li class="col-md-3 col-xs-6">
								<div class="portfolio-item thumbnail">
									<a href="portafolio.php?portafolio=<?php echo $trabajoRelacionado?>" class="thumb-info">
										<img alt="" class="img-responsive" src="img/projects/<?php echo $trabajoRelacionado?>.jpg">
										
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</a>
								</div>
							</li>
						</ul>

					</div>

				</div>

			</div>

			<section class="call-to-action featured footer">
				<div class="container">
					<div class="row">
						<div class="center">
							<h3>Cada día son  <strong>más</strong> y seguimos <strong>escribiendo</strong> códigos en prosa! <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Contáctanos!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
						</div>
					</div>
				</div>
			</section>

<?php 
include "footer.php";
?>