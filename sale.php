<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html><!
	<head>
		<title>Wedding ideas </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
	</head>
	<body class="no-sidebar is-preload">
           
		<div id="page-wrapper">
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
					</div>
					</section>
       

<?php
//session_start();
echo "<a href='admin.php'>logout</a>";
?>
   
      
        <!--inserare imagini sql-->
        <?php
      require_once 'Connection.php';
        
$sql1="DROP PROCEDURE IF EXISTS viewImage";
$sql2="CREATE PROCEDURE viewImage()
BEGIN
SELECT * FROM images.images;
END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();
$sql3="CALL viewImage()";
$q=$con->query($sql3);
     if($q){   
       ?>
       <table width="10" cellpadding="2" cellspace="2" rules="rows">
           <tr>
               <th>Nume</th>
               <th>Imagine</th>
               <th colspan="3" align="center">Actions</th>
           </tr>
           <?php while($row = $q->fetch()): ?>
           
           <tr style="border-bottom: 1px solid black;">
               <td><?php echo $row['title'];?></td>
               <td><img src="<?php echo $row['image'];?>" </td>
               <td>
                    <?php echo "<a href=\"edit.php?id=".$row['id']."\">Edit</a><a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
               </td>
           </tr>
          <?php endwhile; ?>
       </table>
       <br><br>
       <?php
}else{
echo "!!!!!! Something wrong";    
}
?>
        <a href="upload.php">Upload another image</a>
       <!--end of upload images-->      

</body>


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
			<script>
			function anti_right()
	{
	alert('We are sory . All rights reserved!');

	return(false);
	}
document.oncontextmenu = anti_right;
</script>


	</body>
</html>


