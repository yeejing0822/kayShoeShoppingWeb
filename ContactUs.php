<?php
	try {
		$db = new mysqli("localhost", "root","","shop");
	} catch (Exception $exc){
		echo $exc->getTraceAsString();
	}
	if(isset($_POST['name'])&& isset($_POST['subject'])&& isset($_POST['msg'])){
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$msg = $_POST['msg'];
		$is_insert = $db->query("INSERT INTO `contact_data`( `name`, `subject`, `msg`) VALUES ('".$name."','".$subject."','".$msg."')");
		if($is_insert == TRUE){
			echo"<h2>Thanks, your message sent!</h2>";
			exit();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/logo_image.png">
    <title>About Us</title>
    <script src="https://kit.fontawesome.com/cac63ffbe0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/aboutusStyle.css">
    <style> 
	*{background-color:lightyellow;}
	</style>
</head>
<body>     
	<!-- Contact Us Section Start-->
	<section class="contact" id="contact">
		<div class="max-width">
			<h1 class="title">Contact Us</h1>
			<div class ="contact-content">
			<div class ="column left">
				<div class ="text">Get In Touch</div>
				<p>Contact Us Now!</p>
				<div class ="icons">
					<div class="row">
						<i class="fas fa-user"></i>
						<div class="info">
							<div class="head">Name</div>
							<div class="sub-title">Kay's Shoe</div>
						</div>
					</div>

					<div class="row">
						<i class="fas fa-map-marker"></i>
						<div class="info">
							<div class="head">Address</div>
							<div class="sub-title">Selangor, Malaysia</div>
						</div>
					</div>

					<div class="row">
						<i class="fas fa-envelope"></i>
						<div class="info">
							<div class="head">Email</div>
							<div class="sub-title"><a href="mailto:kayshoe@gmail.com">kayshoe@gmail.com</a></div>
						</div>
					</div>
				</div>
			</div>

			<div class ="column right">
				<div class="text">Message Us</div>
				<form method="POST" action="ContactUs.php">
					<div class="field">
						<div class="field name">
							<input type="text" name="name" placeholder="Name" required>
						</div>
												
					</div>
					<div class="field">
				
						<div class="field">
							<input type="text" name="subject" placeholder="Subject" required>
						</div>
						<div class="field textarea">
							<textarea cols="30" rows="10" name="msg" placeholder="Drop Your Message" required></textarea>
						</div>
						<div class ="messagebutton">
							<button type="submit">Send message</button>
						</div>
					</div>
				</form>
			</div>   
			</div>
		</div>
	</section>
 </body>
 </html>