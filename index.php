<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/logo_image.png">
	<title>KAY'S Shoes</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<?php 
		require 'header.php';
	?>
	<h1>KAY's Shoes Store</h1>
	<h2>We Offer You The Best Shoes for Women, Men and Kids!</h2>
	<hr/>
	<div id="container">
		<ul>
			<li>
				<a href="products.php"><img src="img/women_shoe.jpg" alt="Women's shoes' shoe" width="400" height="400"></a>
				<p id="autoResize">Ladies' Shoe</p>
			</li>
			<li>
				<a href="products.php"><img src="img/men_shoe.jpg" alt="Men's shoe" width="400" height="400"></a>
				<p id="autoResize">Men's Shoe</p>
			</li>
			<li>
				<a href="products.php"><img src="img/kids_shoe.jpg" alt="Kids' shoe" width="400" height="400"></a>
				<p id="autoResize">Kids' Shoe</p>
			</li>
		</ul>
	</div>
	<footer class="footer">
		<p>&copy 2020 KAY's Shoes Malaysia Sdn Bhd.</p>
	</footer>
</body>
</html>