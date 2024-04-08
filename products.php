<?php
    session_start();
    require 'check_if_added.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo_image.png">
        <title>KAY'S Shoes</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
	
    <body>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="index.php">Home</a>
		  <a href="faq.php">FAQ</a>
		  <a href="blog/blog homepage">Blog</a>
		  <a href="ContactUs.php">Contact Us</a>
		  <a href="About Us.html">About Us</a>
		</div>
		<div id="main">
			<?php require 'header.php'; ?>
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
			<h1>Welcome to KAY's Shoes Store!</h1>
				
			<div id="list_women">
				<h2>Women's Shoes</h2>
				<ul>
					<li>
						<a href="cart.php"><img src="img/Anum Slingback Heel Sandals.jpg" alt="Nelissa Hilman Anum Slingback Heel Sandals" width="290" height="300"></a>
						<h3>Anum Slingback Heel Sandals</h3>
						<p>Price: RM 229.00</p>
						<p>Size: 35 - 41</p>
						<p>Reviews: 4.5 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button" >Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(1)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=1" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>
						<a href="cart.php"><img src="img/Edgy Open Toe Heels.jpg" alt="MILLIOT & CO. Edgy Open Toe Heels" width="290" height="300"></a>
						<h3>Edgy Open Toe Heels</h3>
						<p>Price: RM 119.00</p>
						<p>Size: 36 - 39</p>
						<p>Reviews: 4.9 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(2)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=2" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>
						<a href="cart.php"><img src="img/Basic Mazy Mid Slip On Sandals.jpg" alt="HAPPY2U Basic Mazy Mid Slip On Sandals" width="290" height="300"></a>
						<h3>Basic Mazy Mid Slip On Sandals</h3>
						<p>Price: RM 65.55</p>
						<p>Size: 35 - 40</p>
						<p>Reviews: 5.0 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button" >Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(3)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=3"  name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>
						<a href="cart.php"><img src="img/Superga 2750 - White.jpg" alt="Superga 2750" width="290" height="300"></a>
						<h3>Superga 2750 - White</h3>
						<p>Price: RM 219.90</p>
						<p>Size: 35 - 43</p>
						<p>Reviews: 4.7 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(4)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=4" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
				</ul>
			</div>
			
			<div id="list_men">
				<h2>Men's Shoes</h2>
				<ul>
					<li>
						<a href="cart.php"><img src="img/Slip-On Comfort Sandal.jpg" alt="XES Men BSMM20716 Slip-On Comfort Sandal" width="290" height="300"></a>
						<h3>Slip-On Comfort Sandal</h3>
						<p>Price: RM 29.00</p>
						<p>Size: 39 - 44</p>
						<p>Reviews: 4.2 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(5)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=5" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>				
						<a href="cart.php"><img src="img/Right Angle Sandal.jpg" alt="MUJI Right Angle Sandal" width="290" height="300"></a>
						<h3>Right Angle Sandal</h3>
						<p>Price: RM 59.00</p>
						<p>Size: 34 - 40</p>
						<p>Reviews: 4.9 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(6)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=6" name="add" value="add" >Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>		
						<a href="cart.php"><img src="img/Fipper Trekker Non-Rubber.JPG" alt="Fipper Trekker Non-Rubber" width="290" height="300"></a>
						<h3>Fipper Trekker Non-Rubber</h3>
						<p>Price: RM 53.00</p>
						<p>Size: 38 - 44</p>
						<p>Reviews: 4.7 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(7)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=7" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>
						<a href="cart.php"><img src="img/Fashion Breathable Mesh N-shoes.jpg" alt="Fashion Breathable Mesh N-shoes" width="290" height="300"></a>
						<h3>Fashion Breathable Mesh N-shoes</h3>
						<p>Price: RM 60.00</p>
						<p>Size: 37 - 41</p>
						<p>Reviews: 4.4 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(8)){
									echo '<a href="#" >Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=8" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
				</ul>
			</div>
				
			<div id="list_kid">	
				<h2>Kid's Shoes</h2>
				<ul>
					<li>
						<a href="cart.php"><img src="img/Non Slip Soft Soled Baby's Sandals.jpg" alt="Non Slip Soft Soled Baby's Sandals" width="290" height="300"></a>
						<h3>Non Slip Soft Soled Baby's Sandals</h3>
						<p>Price: RM23.80</p>
						<p>Size: 24 - 35</p>
						<p>Reviews: 5.0 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(9)){
									echo '<a href="#">Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=9" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>
						<a href="cart.php"><img src="img/Bear Slippers.jpg" alt="Bear Slippers" width="290" height="300"></a>
						<h3>Bear Slippers</h3>
						<p>Price: RM 18.50</p>
						<p>Size: 24 - 35</p>
						<p>Reviews: 4.3 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button" >Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(10)){
									echo '<a href="#">Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=10" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>
						<a href="cart.php"><img src="img/Baby sandals cartoon Sesame Street.jpg" alt="baby sandals cartoon Sesame Street" width="290" height="300"></a>
						<h3>Baby sandals cartoon Sesame Street</h3>
						<p>Price: RM 22.00</p>
						<p>Size: 18 - 33 </p>
						<p>Reviews: 4.3 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(11)){
									echo '<a href="#">Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=11" name="add" value="add" >Add to cart</a>
									<?php
								}
							}?>
					</li>
					<li>	
						<a href="cart.php"><img src="img/Dinosaur Children's Light Sandals.jpg" alt="Dinosaur Children's Light Sandals" width="290" height="300"></a>
						<h3>Dinosaur Children's Light Sandals</h3>
						<p>Price: RM 12.50</p>
						<p>Size: 22 - 26 </p>
						<p>Reviews: 4.8 / 5.0</p>
						<?php if(!isset($_SESSION['email'])){  ?>
							<p><a href="login.php" role="button">Buy Now</a></p>
							<?php
							}
							else{
								if(check_if_added_to_cart(12)){
									echo '<a href="#">Added to cart</a>';
								}else{
									?>
									<a href="cart_add.php?id=12" name="add" value="add">Add to cart</a>
									<?php
								}
							}?>
					</li>
				</ul>
			</div>
			
			<footer class="footer">
				<p>&copy 2020 KAY's Shoes Malaysia Sdn Bhd.</p>
			</footer>
		</div>
		
		<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		  document.body.style.backgroundColor = "white";
		}
		</script>
    </body>
</html>
