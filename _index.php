<?php 

require_once("inc/configuration.php");

$sql = new Sql();

$result = $sql->query("SELECT * FROM tb_produtos;");

while($row = mysqli_fetch_array($result)){

	var_dump($row);
}

exit;

?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<title>Orlando City</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
		<link rel="stylesheet" href="css/orlando.css">
		<link rel="stylesheet" href="css/orlando-mobile.css">

	</head>
	<body>

		<header>
			
			<div id="menu-mobile-mask" class="visible-xs"></div>

			<div id="menu-mobile" class="visible-xs">
				
				<ul class="list-unstyled">
					<li><a href="videos.html">Videos</a></li>
					<li><a href="#">Tickets</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Schedule</a></li>
				</ul>

				<div class="bar-close">
					<button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
				</div>

			</div>
			
			<div class="container">
				<img id="logotipo" src="img/orlando-logo.png" alt="Logotipo">
			</div>

			<div class="header-black">
				
				<div class="container">

					<input type="search" id="input-search-mobile" class="visible-xs" placeholder="search...">
				
					<button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
					<button id="btn-search" type="button"><i class="fa fa-search"></i></button>

					<ul class="pull-right">
						<li class="club-01"><a href="#"></a></li>
						<li class="club-02"><a href="#"></a></li>
						<li class="club-03"><a href="#"></a></li>
						<li class="club-04"><a href="#"></a></li>
						<li class="club-05"><a href="#"></a></li>
						<li class="club-06"><a href="#"></a></li>
						<li class="club-07"><a href="#"></a></li>
						<li class="club-08"><a href="#"></a></li>
						<li class="club-09"><a href="#"></a></li>
						<li class="club-10"><a href="#"></a></li>
						<li class="club-11"><a href="#"></a></li>
						<li class="club-12"><a href="#"></a></li>
						<li class="club-13"><a href="#"></a></li>
						<li class="club-14"><a href="#"></a></li>
						<li class="club-15"><a href="#"></a></li>
						<li class="club-16"><a href="#"></a></li>
						<li class="club-17"><a href="#"></a></li>
						<li class="club-18"><a href="#"></a></li>
						<li class="club-19"><a href="#"></a></li>
						<li class="club-20"><a href="#"></a></li>
						<li class="club-21"><a href="#"></a></li>
						<li class="club-22"><a href="#"></a></li>
					</ul>

				</div>

			</div>

			<div class="container">
				
				<div class="row">
					
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="videos.html">Videos</a></li>
							<li><a href="#">Tickets</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Schedule</a></li>
							<li class="search">
								<div class="input-group">
							      <input type="search" placeholder="search" id="input-search">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>
						</ul>
					</nav>

				</div>

			</div>			

		</header>

		<section>
			
			<div id="banner">
				
				<h1>Orlando City<small>Orlando City Soccer Club</small></h1>

			</div>

			<div id="news" class="container">
				
				<div class="row text-center">
					<h2>Latest News</h2>
					<hr>	
				</div>				
				
				<button type="button" id="btn-news-prev">prev<i class="fa fa-angle-left"></i></button>
				<button type="button" id="btn-news-next">next<i class="fa fa-angle-right"></i></button>

				<div class="row thumbnails">
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>chevron
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
				</div>
			</div>

			<div id="estatisticas">
				
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<p>61348<small>Stadium Capacity</small></p>
						</div>
						<div class="col-md-4">
							<p>2010<small>Founded</small></p>
						</div>
						<div class="col-md-4">
							<p>7th<small>Eastern Conference</small></p>
						</div>
					</div>
				</div>

			</div>

			<div id="call-to-action">
				
				<div class="container">

					<div class="row text-center">
						<h2>American club number one in Brazil</h2>
						<hr>	
					</div>

					<div class="row">
						
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Uteni ad minima veniam, quis nostrum sed quia non numquam eius modi tempora incidunt ut. quia non numquam eius numquam eius modi temp modi tempora incidunt ut labore et dolore m.</p>

					</div>
					
					<div class="text-center">
						<div class="row row-max-400">
							
							<div class="col-xs-6">
								<a href="#" class="btn btn-roxo">Shop</a>
							</div>
							<div class="col-xs-6">
								<a href="#" class="btn btn-amarelo">Register</a>
							</div>

						</div>
					</div>

				</div>

			</div>

		</section>

		<footer>
			
			<div class="row row-cinza-claro">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-2 text-center hidden-xs">
							
							<img class="logotipo" src="img/orlando-logo.png" alt="Logotipo">

						</div>
						<div class="col-md-10">
							
							<div class="row row-cols">
								<div class="col-md-4 col-popular-post hidden-xs">
									
									<h4>POPULAR POSTS</h4>

									<ul class="list-unstyled">
										<li>
											<h5>Neque porro quisquam est, quister.</h5>
											<time>January 01, 2016</time>
										</li>
										<li>
											<h5>Neque porro quisquam est, quister.</h5>
											<time>January 01, 2016</time>
										</li>

									</ul>

								</div>
								<div class="col-md-4 col-links hidden-xs">
									
									<h4>LINKS</h4>

									<ul class="list-unstyled">
										<li><a href="#"><i class="fa fa-angle-right"></i>Tickets</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Schedule</a></li>
									</ul>

								</div>
								<div class="col-md-4 col-get-in-touch">
									
									<h4 class="hidden-xs">GET IN TOUCH</h4>

									<address class="hidden-xs">
										<i class="fa fa-map-marker"></i> <span>618 E. South Street, Suite 510<br/>Orlando, FL 32801</span>
									</address>

									<p class="hidden-xs"><a href="tel:1855ORLCITY"><i class="fa fa-phone"></i>1.855.ORL.CITY</a></p>
									
									<div class="row-fluid visible-xs">
										<div class="col-xs-6">
											<a href="#" class="btn btn-footer "><i class="fa fa-map-marker"></i>Location</a>
										</div>
										<div class="col-xs-6">
											<a href="#" class="btn btn-footer"><i class="fa fa-phone"></i>Call</a>
										</div>
									</div>

									<ul class="list-unstyled list-socials">
										<li>
											<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
										</li>
										<li class="page-up">
											<a href="#" id="page-up"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>

								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="row row-cinza-escuro">
				
				<div class="container copyright-mobile">
					
					<p class="pull-left">Copyright © Orlando City Soccer 2016. All rights reserved.</p>
					<p class="pull-right text-roxo">Created by Lucas (HCODE in Udemy)</p>

				</div>

			</div>

		</footer>

		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/efeitos.js"></script>
		
		<script>
			/*$(document).ready(function(){

				$("#logotipo").on("mouseover",function(){
					
					$("#banner h1").addClass("efeito");

				}).on("mouseout", function(){

					$("#banner h1").removeClass("efeito");

				});

				$("#input-search").on("focus", function(){

					$("li.search").addClass("ativo");

				}).on("blur", function(){

					$("li.search").removeClass("ativo");				

				});

				$(".thumbnails").owlCarousel({
			 
			      //autoPlay: 3000,
			      items : 4
			 
			  	});

			});
		</script>

		<script>
			/*$(document).ready(function(){
				$("#logotipo").on("mouseover", function(){
					$("#banner h1").addClass("efeito");

				}).on("mouseout", function(){
					$("#banner h1").removeClass("efeito");
				});

				$("#input-search").on("focus", function(){
					$("li.search").addClass("ativo");
				
				}).on("blur", function(){
					$("li.search").removeClass("ativo");
				});

				var owl = $(".thumbnails");
				owl.owlCarousel({
					items:4,
					loop:true,
					margin:10,
					autoplay:true,
					autoplayTimeout:1000,
					autoplayHoverPause:true
				});
					$('.play').on('click', function(){
						owl.trigger('play.owl.autoplay', [1000])
					})
					$('.stop').on('click', function(){
						owl.trigger('stop.owl.autoplay')
					})
			});*/
		</script>

	</body>
</html>