<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title> Wedding ideas </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">
<div id="page-wrapper">

			<!-- Header -->
			<!-- Header -->
				<section id="header">
			
				 <div class="w3-container">
				 <br></br>
				 <br></br>
                   <h2>Wedding ideas</h2><p>Luxury, Real and Perfect </p>
				  <br></br>
                 </div>
                        <!-- Nav -->
                           <nav id="nav">
								<ul>
									<li><a class="icon fa-home" href="index.php"><span>Home</span></a></li>
                                                                        
                                                       
                                                                        
									<li>
										<a  class="icon fa-search"><span>Search</span></a>
										<ul>
											<li><a href="sale.php">Place to do the best weeding</a></li>
											<li><a href="#">Ceremony and vows</a></li>
                                                                                        <li><a href="#">Reception</a></li>
                                                                                        <li><a href="#">Wedding decor</a></li>
                                                                                        <li><a href="#">Photography</a></li>
										</ul>
								    </li> 
									<li><a class="icon fa-tint "><span>Fashion and beauty</span></a>
									       <ul>
									         <li><a href="destination.php">Wedding dresses</a></li>
									         <li><a href="lifestyle.php">Bridesmade dresses</a></li>
									        </ul>
                                    </li>											
									<li><a class="icon fa-retweet" href="marketing.php"><span>Marketing</span></a>
									  <ul>
									   
									    <li><a  href="publications.php">Publications</a></li>
									  </ul>
									</li>
                                                                        <li><a class="icon fa-key"  href="admin.php"><span>Admin zone</span></a> </li>
                                                                        
								</ul>
							</nav>

                        <div>					</div>	</div>
					</section>
					
					<header>
					<h3>If you are wondering why to choose a house near the beach, look at some pictures and listen to the wonderful sound of the waves</h3>
					</header>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/b1.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/b2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/b3.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/b4.jpg" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<audio controls>
  <source src="videos/sea.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

					
					<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>CONCERNS? FEEDBACK?</h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" action="#">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<a href="" class="form-button-submit button icon fa-envelope">Send us your feedback</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Each TRILLIONAIRE MANSIONS broker is committed to providing the highest level of services to clients around the world. If your experience with one of our affiliated offices is not consistent with this commitment, please let us know.

Please send us your thoughts by filling out the below form. Comments are solely for internal use. Your address will not be shared with outside parties or used for any other purpose than to respond to your comments..</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon fa-home">
													California<br />
													USA
												</li>
												<li class="icon fa-phone">
													(321) 876-7643
												</li>
												
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon fa-twitter">
													<a href="https://twitter.com/MansionGlobal">@MANSIONS GLOBAL</a>
												</li>
												<li class="icon fa-instagram">
													<a href="https://www.instagram.com/trillionairemansions/?hl=ro">instagram.com/TRILLIONAIRE MANSIONS</a>
												</li>
											
												<li class="icon fa-facebook">
													<a href="https://www.facebook.com/mansionglobal/">facebook.com/MANSIONS GLOBAL</a>
													<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>			
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

