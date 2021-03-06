<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="Trang_1.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="Trang_1.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li class="selected">
					<a href="contact.php">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="contact" class="wrapper clearfix">
			<div id="sidebar">
				<ul>
					<li>
						<a href="blog.php"><img src="images/earth-small.jpg" alt="Img" height="154" width="213"></a>
					</li>
					<li>
						<a href="blog.php"><img src="images/spaceshuttle-closeup.jpg" alt="Img" height="154" width="213"></a>
					</li>
				</ul>
				<div class="click-here">
					<h1>Lorem Ipsum Dolor!</h1>
					<a href="Trang_1.php" class="btn1">Click Here!</a>
				</div>
			</div>
			<div class="main">
				<h1>Contact Us</h1>
				<form method="post">
					<ul>
						<li>
							<label>Enter your full name here.</label>
							<input type="text" name="txtName" value="Full Name" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<label>Enter your email address here.</label>
							<input type="text" name="txtEmail" value="Email Address" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<label>Enter the Subject message here.</label>
							<input type="text" name="txtSubject" value="Subject" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<label class="msg">Enter your Message here.</label>
							<textarea name="txtMessage" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">Message</textarea>
							<div class="checkbox">
								<label for="terms">
									<input type="checkbox" name="txtTerm" id="terms" value="term">
									I agree to the Terms and Conditions</label>
								<br>
								<label for="subscribe">
									<input type="checkbox" name="txtSubcribe" id="subcribe" value="subcribe">
									Subscribe to newsletter</label>
							</div>
							<input type="submit" name="btn" value="Send Now" class="btn3"> 
							
						</li>  
					</ul> 
				</form> 
				<?php  
					require('control.php');
					$getdata = new Data(); // g???i ?????n class data ??c g??n b???ng bi???n $getdata
					
					$check="/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([az0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
					if (!preg_match($regex,$email)) {
						echo "?????a ch??? mail ph?? h???p";
 					} else {
						 echo "Email khong ????ng!!!";
					 } 
					if(isset($_POST['btn'])) {
						if(empty($_POST['txtEmail']) && empty($_POST['txtMessage'])) {
							echo "<script>alert('Khong ???????c ????? tr???ng d??? li???u');</script>";
						} else { 
							$insert = $getdata->in_contact($_POST['txtName'], $_POST['txtEmail'], $_POST['txtSubject'], 
							$_POST['txtMessage'], $_POST['txtTerm'], $_POST['txtSubcribe']);  // khai b??o 1 bi???n insert v???i l???p data ch??? ?????n function in_contact  
							if($insert) { 
								// header('location:Trang_1.php'); // chuy???n ?????n trang1.php
								 echo "<script>alert('Your message has been sent successfully');</script>";
							} else {
								echo "<script>alert('Your message has not been sent successfully');</script>";
							}
						}

					}
					
				?>
			</div>
		</div>
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">
			<li>
				<img src="images/astronaut.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 1</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/earth.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 2</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/spacecraft-small.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 3</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/space-shuttle.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 4</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
		</ul>
		<div class="body">
			<div class="wrapper clearfix">
				<div id="links">
					<div>
						<h4>Social</h4>
						<ul>
							<li>
								<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank">Google +</a>
							</li>
							<li>
								<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank">Facebook</a>
							</li>
							<li>
								<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank">Youtube</a>
							</li>
						</ul>
					</div>
					<div>
						<h4>Heading placeholder</h4>
						<ul>
							<li>
								<a href="Trang_1.php">Link Title 1</a>
							</li>
							<li>
								<a href="Trang_1.php">Link Title 2</a>
							</li>
							<li>
								<a href="Trang_1.php">Link Title 3</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="newsletter">
					<h4>Newsletter</h4>
					<p>
						Sign up for Our Newsletter
					</p>
					<form action="Trang_1.php" method="post">
						<input type="text" value="">
						<input type="submit" value="Sign Up!">
					</form>
				</div>
				<p class="footnote">
					?? Copyright ?? 2023.Company name all rights reserved
				</p>
			</div>
		</div>
	</div>
</body>
</html>