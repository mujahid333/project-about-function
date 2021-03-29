<?php

function print_header(){
	echo '<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/3.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Simple House</h1>
								<h6 class="tm-site-description">new restaurant template</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Home</a></li>
								<li class="tm-nav-li"><a href="about.php" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
';

}

function header_description(){
	echo '<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
				<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
			</header>
			';
}


function gallery_links(){
	echo '<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
					</ul>
				</nav>
			</div>';
}

function pizza(){


	$gallery1 = array(

						
						array(
						"image" => "img/gallery/01.jpg",  
						"name" => "Fusce dictum finibus",
						"decription" => "Nam in suscipit nisi",
						"price"=>"40",

						 "discountprice"=> "30"),
						array(
						"image" => "img/gallery/02.jpg",  
						"name" =>"Aliquam sagittis",
						 "decription" => "Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan",
						 "price"=>"40",
						"discountprice"=> "30"),
						array(
						"image" =>"img/gallery/03.jpg",  
						"name" =>"Sed varius turpis", 
						"decription" => "Nam in suscipit nisi, sit amet consectetur metus.",
						"price"=>"40",
					      "discountprice"=> "30"),
						array(
						"image" => "img/gallery/04.jpg" ,  
						"name" =>"Aliquam sagittis",
						 "decription" => "Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan",
						 "price"=>"40",
						 "discountprice"=> "30"),
						array(
						"image" =>  "img/gallery/05.jpg"  ,
						"name" =>"Maecenas eget justo",
						 "decription" => "Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan",
						 "price"=>"40",
						  "discountprice"=> "30"),
						array(
						"image" => "img/gallery/06.jpg"  , 
						"name" =>"Noodle One",
						 "decription" => "Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan",
						 "price"=>"40",
						 "discountprice"=> "30"),
						array(
						"image" => "img/gallery/07.jpg" ,  
						"name" =>"Quisque et felis",
						 "decription" => "Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan",
						 "price"=>"40",
						  "discountprice"=> "30"),
						array(
						"image" => "img/gallery/07.jpg" ,  
						"name" =>"Quisque et felis eros" ,
						 "decription" => "Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan",
						 "price"=>"40",
						 "discountprice"=> "30"),

						);

                
              $gallery_content = "";
              // print_r($gallery[7]['name']);
              foreach ($gallery1 as $inner_array) {

              $gallery_content .='<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="'.$inner_array['image'].'" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">'.$inner_array['name'].'</h4>
								<p class="tm-gallery-description">'.$inner_array['decription'].'</p>
								<p class="tm-gallery-price">' . $inner_array['price']."/".$inner_array['discountprice'].'</p>
							</figcaption>
						</figure>
					</article>';
              }
echo '	<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
				
					'.$gallery_content.'
				</div> <!-- gallery page 1 -->
            </div>';

}


function salade(){
      
      	$gallery2 = array(

              	 array("image" =>"img/gallery/04.jpg", 
              	 	"name" =>"Salad Menu One",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" =>"$25/$15" ),
              	 array("image" => "img/gallery/03.jpg",
              	 	"name" =>"Second Title Salad",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$35/$25"),
              	 array("image" => "img/gallery/05.jpg" ,
              	 	"name" => "Third Salad Item",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" =>"$45/$35" ),
              	 array("image" => "img/gallery/08.jpg",
              	 	"name" => "Superior Salad",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$60/$45" ),
              	 array("image" => "img/gallery/04.jpg",
              	 	"name" => "Sed ultricies dui",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$70/$55" ),
              	 array("image" => "img/gallery/01.jpg",
              	 	"name" => "Second Title Salad",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$85/$75" ),

              	);


              	$gallery_content2 = "";
              	foreach ($gallery2 as $inner_array2) {
              		$gallery_content2 .='<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="'.$inner_array2['image'].'"alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">'.$inner_array2['name'].'</h4>
								<p class="tm-gallery-description">'.$inner_array2['decription'].'</p>
								<p class="tm-gallery-price">'.$inner_array2['price'].'</p>
							</figcaption>
						</figure>
					</article>';
              	}
            echo  '  <div class="row tm-gallery">

			 <!-- gallery page 2 -->

		<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
					
				     '.$gallery_content2.'

		</div> <!-- gallery page 2 -->';
}

function Noodles(){

	 	$gallery3 = array(

              	 array("image" =>"img/gallery/08.jpg", 
              	 	"name" =>"Salad Menu One",
              	 	"decription" =>"Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
              	 	"price" =>"$12.50" ),
              	 array("image" => "img/gallery/07.jpg",
              	 	"name" =>"Second Title Salad",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$45"),
              	 array("image" => "img/gallery/06.jpg" ,
              	 	"name" => "Third Soft Noodle",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" =>"$35" ),
              	 array("image" => "img/gallery/05.jpg",
              	 	"name" => "Aliquam sagittis",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$60" ),
              	 array("image" => "img/gallery/04.jpg",
              	 	"name" => "Maecenas nulla neque",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$55" ),
              	 array("image" =>"img/gallery/08.jpg.",
              	 	"name" => "Second Title Salad",
              	 	"decription" =>"Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique",
              	 	"price" => "$80" ),

              	);


              	$gallery_content3 = "";
              	foreach ($gallery3 as $inner_array3) {
              		$gallery_content3 .='<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="'.$inner_array3['image'].'"alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">'.$inner_array3['name'].'</h4>
								<p class="tm-gallery-description">'.$inner_array3['decription'].'</p>
								<p class="tm-gallery-price">'.$inner_array3['price'].'</p>
							</figcaption>
						</figure>
					</article>';
              	}
          echo '
          <div class="row tm-gallery">
          <!-- gallery page 3 -->
				<div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
					
						'.$gallery_content3.'

				</div> <!-- gallery page 3 -->';    	
}


function print_main(){

	echo'<main>
			<div class="row tm-gallery">
			
				
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
							<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
							<a href="about.php" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>';
}

function print_discription(){
	echo '<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Contact Page</h2>
				<p class="col-12 text-center">You may use <a rel="nofollow" href="https://www.ltcclock.com/downloads/simple-contact-form/" target="_blank">Simple Contact Form</a> to send email to your inbox. You can modify and use this template for your website. Header image has a parallax effect. Total 3 HTML pages included in this template.</p>
			</header>';
}

function print_form(){

	echo '<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="" method="POST" class="tm-contact-form">
					        <div class="form-group">
					          <input type="text" name="name" class="form-control" placeholder="Name" required="" />
					        </div>
					        
					        <div class="form-group">
					          <input type="email" name="email" class="form-control" placeholder="Email" required="" />
					        </div>
				
					        <div class="form-group">
					          <textarea rows="5" name="message" class="form-control" placeholder="Message" required=""></textarea>
					        </div>
					
					        <div class="form-group tm-d-flex">
					          <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
					            Send
					          </button>
					        </div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Our Address</h4>
							<address>
								180 Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus 10550
							</address>
							<a href="tel:080-090-0110" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>080-090-0110
							</a>
							<a href="mailto:info@company.co" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>info@company.co
							</a>
							<div class="tm-contact-social">
								<a href="https://fb.com/templatemo" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

function print_location(){
echo '<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
			<div class="tm-container-inner-2 tm-map-section">
				<div class="row">
					<div class="col-12">
						<div class="tm-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.567405300933!2d71.66228351457742!3d29.38295315647225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b918fbc6fe35d%3A0x42a817a533142f4d!2sZoomers%20Digital%20Economy%20Lab!5e0!3m2!1sen!2s!4v1615991981589!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>

					</div>
				</div>
			</div>';

}

function print_contact(){
	echo '

		<main>
			<div class="tm-container-inner-2 tm-info-section">
				<div class="row">
					<!-- FAQ -->
					<div class="col-12 tm-faq">
						<h2 class="text-center tm-section-title">FAQs</h2>
						<p class="text-center">This section comes with Accordion tabs for different questions and answers about Simple House HTML CSS template. Thank you. #666</p>
						<div class="tm-accordion">
							<button class="accordion">1. Fusce eu lorem et dui #09C maximus varius?</button>
							<div class="panel">
							  <p>#666 Duis blandit purus vel nenenatis rutrum. Pellentesque pellentesque tindicunt lorem, ac egestas massa sollicitudin vel. Nam scelerisque vulputate quam mollis pretium. Morbi condimentum volutpat.</p>
							</div>
							
							<button class="accordion">2. Vestibulum #999 ante ipsum primis in faucibus orci?</button>
							<div class="panel">
							  <p>Mauris euismod odio at commodo rhoncus. Maecenas nec interdum purus, sed auctor est. Sed eleifend urna nec diam consectetur, a aliquet turpis facilisis. Integer est sapien, sagittis vel massa vel, interdum euismod erat. Aenean sollicitudin nisi neque, efficitur posuere urna rutrum porta.</p>
							</div>
							
							<button class="accordion">3. Can I redistribute this template as a ZIP file?</button>
							<div class="panel">
							  <p>Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a href="https://templatemo.com/contact">contact TemplateMo</a> for additional permissions about our templates. Thank you.</p>
							</div>
							
							<button class="accordion">4. Ut ac erat sit amet neque efficitur faucibus et in lectus?</button>
							<div class="panel">
								<p>Vivamus viverra pretium ultricies. Praesent feugiat, sapien vitae blandit efficitur, sem nulla venenatis nunc, vel maximus ligula sem a sem. Pellentesque ligula ex, facilisis ac libero a, blandit ullamcorper enim.</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</main>

		';

		
}


function print_about_description(){
	echo '	<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">About Simple House</h2>
				<p class="col-12 text-center">This is about page of simple house template. 
                You can modify and use this HTML template for your website. Total 3 HTML pages included in this template. Header image has a parallax effect.</p>
			</header>
';
}

function print_teaminfo(){
	echo '<div class="tm-container-inner tm-persons">
				<div class="row">
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/about-01.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Jennifer Soft</h4>
								<p class="tm-person-title">Founder and CEO</p>
								<p class="tm-person-about">Vivamus cursus leo nec sem feugiat sagittis.
								Duis ut feugiat odio, sit amet accumsan
								odio.</p>
								<div>
									<a href="https://fb.com" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
									<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/about-02.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Daisy Walker</h4>
								<p class="tm-person-title">Executive Chef</p>
								<p class="tm-person-about">Praesent non vulputate elit. Orci varius
								natoque et magnis dis parturient, nascetur ridiculus mus.</p>
								<div>
									<a href="https://fb.com" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/about-03.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Florence Nelson</h4>
								<p class="tm-person-title">Kitchen Manager</p>
								<p class="tm-person-about">Aenean sapien sem, ultricies sed vulputate
								et, auctor vel mauris. Integer sit amet diam eget est facilisis lacinia vitae.</p>
								<div>
									<a href="https://fb.com" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/about-04.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Valentina Martin</h4>
								<p class="tm-person-title">Culinary Director</p>
								<p class="tm-person-about">Praesent non vulputate elit. Orci varius
								natoque penatibus et magnis montes, nascetur ridiculus mus.</p>
								<div>
									<a href="https://fb.com" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
									<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
									<a href="https://youtube.com" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
				</div>
			</div>';
}

function print_parallex(){
echo '<div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" data-parallax="scroll" data-image-src="img/about-05.jpg"></div>		
						</div>
					</div>
				</div>
			</div>';
}

function print_readmore(){
	echo '<div class="tm-container-inner tm-features">
				<div class="row">
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-pepper-hot tm-feature-icon"></i>
							<p class="tm-feature-description">Donec sed orci fermentum, convallis lacus id, tempus elit. Sed eu neque accumsan, porttitor arcu a, interdum est. Donec in risus eu ante.</p>
							<a href="index.html" class="tm-btn tm-btn-primary">Read More</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-seedling tm-feature-icon"></i>
							<p class="tm-feature-description">Maecenas pretium rutrum molestie. Duis dignissim egestas turpis sit. Nam sed suscipit odio. Morbi in dolor finibus, consequat nisl eget.</p>
							<a href="index.html" class="tm-btn tm-btn-success">Read More</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-cocktail tm-feature-icon"></i>
							<p class="tm-feature-description">Morbi in dolor finibus, consequat nisl eget, pretium nunc. Maecenas pretium rutrum molestie. Duis dignissim egestas turpis sit.</p>
							<a href="index.html" class="tm-btn tm-btn-danger">Read More</a>
						</div>
					</div>
				</div>
			</div>';
}


function print_about(){
	echo '

		<main>
			
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							<img src="img/about-06.jpg" alt="Image" class="img-fluid tm-history-img" />
							<div class="tm-history-text"> 
								<h4 class="tm-history-title">History of our restaurant</h4>
								<p class="tm-mb-p">Sed ligula risus, interdum aliquet imperdiet sit amet, auctor sit amet justo. Maecenas posuere lorem id augue interdum vehicula. Praesent sed leo eget libero ultricies congue.</p>
								<p>Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a href="https://templatemo.com/contact">contact TemplateMo</a> for additional permissions about our templates. Thank you.</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</main>

';
}


function print_footer(){


echo "<div class='row tm-gallery'>
	<footer class='tm-footer text-center'>
			<p>Copyright &copy; 2020 Simple House 
            
            | Design: <a rel='nofollow' href='https://templatemo.com'>TemplateMo</a></p>
		</footer>
	</div>
	<script src='js/jquery.min.js'></script>
	<script src='js/parallax.min.js'></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass('active');
			});
		});
	</script>";
}

 ?>
