<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Wedding ideas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script>
function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user=getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
     user = prompt(".This website uses cookies.We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners who may combine it with other information that you've provided to them or that they've collected from your use of their services. You consent to our cookies if you continue to use our website.Please enter your name:","");
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
  }
}
</script>
		<style>
        .mySlides {display:none;}
		body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color:Gray;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color:Gray;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
	<body onload="checkCookie()">
	

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
	  <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

		<div id="page-wrapper">

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

                        <div>					</div>

      
                </div>
					<div class="w3-content w3-display-container">

                      <div class="w3-display-container mySlides">
                       <img src="images/i1.jpg" style="width:100%">
                       <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                        Rancho Santa Fe, California
                      </div>
                    </div>

                   <div class="w3-display-container mySlides">
                 <img src="images/i2.jpg" style="width:100%">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
   Monaco, La Condamine
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/i3.jpg" style="width:100%">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Cologny, Geneva 
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/i4.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
    
Gassin, Provence-Alpes-Cote D'Azur
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/i5.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    Key Largo, Florida
  </div>
</div>



<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</section>
                
			<!-- Features -->
				<section id="features">
					<div class="container">
					<div class="row aln-center">
							<div class="col-6  col-12-small">

								<!-- Feature -->
									<section>
										<a href="" class="image featured"><img src="images/1.jpg" alt="" /></a>
										<header>
											<h3>Take Song Requests</h3>
										</header>
										<p>Ask invitees to jot down their favorite song on the RSVP card—or go modern and have them email it to you instead! Compile all the song requests into a playlist and give it to your DJ; this will ensure all your guests will enjoy some jams.
                                                                                </p>
</section>

							</div>
							<div class="col-6 col-12-small">

								<!-- Feature -->
									<section>
										<a href="marketing.php" class="image featured"><img src="images/2.jpg" alt="" /></a>
										<header>
											<h3>Stick to a Theme</h3>
										</header>
										<p>Are you a wanderlusting pair with a travel theme? Go the extra mile and use leather luggage tags to hold the escort or place cards.</p>
									</section>

							</div>
						</div>
					</div>
				</section>

			

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="https://www.brides.com/story/75-ways-to-make-your-wedding-unique">Maximizing Your Home Design</a></h2>
											</header>
											<a href="https://www.brides.com/story/75-ways-to-make-your-wedding-unique" class="image featured"><img src="images/img9.jpeg" alt="" /></a>
									
											<p>The look of your home is highly personal.
                                               However, tapping into the hottest design trends can only help perfect your unique vision for decorating your space.</p>
											<ul class="actions">
												<li><a href="https://www.mansionglobal.com/articles/maximizing-your-home-design-201406" class="button icon fa-file">Continue Reading</a></li>
											</ul>
										</article>

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="https://www.mansionglobal.com/articles/a-view-from-the-top-126909">A View From the Top</a></h2>
											</header>
											<a href="https://www.mansionglobal.com/articles/a-view-from-the-top-126909" class="image featured"><img src="images/i8.jpg" alt="" /></a>
											
											<p>A Fresh and Colorful Summer Wedding at Sound View Greenport on Long Island</p>
											<ul class="actions">
												<li><a href="https://www.mansionglobal.com/articles/a-view-from-the-top-126909" class="button icon fa-file">Continue Reading</a></li>
											</ul>
										</article>

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

								
														<!-- Highlight -->
														<article class="box highlight">
															
															

													<!-- Highlight -->
														<article class="box highlight">
															
															<a href="" class="image left"><img src="images/i7.jpg" alt="" /></a>
															<p>At Brides, our number one goal is to help you during every step of your wedding journey. The current uncertainty of the COVID-19 pandemic is no exception. We know so many of you are being faced with tough choices and seeing months of planning turned upside down. </p>
															<ul class="actions">
																<li><a href="https://www.brides.com/note-from-team-brides-corona-virus-4800290" class="button icon fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
											</ul>
										</section>

								</div>

						</div>
					</div>
				</section>

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
											<div>
											<input type="reset" value="Reset" />
                                            <input type="reset" value="Clear" />
                                           
											</div>
											<div class="col-12">
												<a href="#"  class="button-submit button icon fa-envelope">Send us your feedback</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
										<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon fa-home">
													
													California <br />
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
													<a href="https://twitter.com/">@Bride</a>
												</li>
												<li class="icon fa-instagram">
													<a href="https://www.instagram.com/trillionairemansions/?hl=ro">instagram.com/BBride</a>
												</li>
											
												<li class="icon fa-facebook">
													<a href="https://www.facebook.com/mansionglobal/">facebook.com/Bbride</a>
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