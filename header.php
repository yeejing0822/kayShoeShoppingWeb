<nav>
	<a href="index.php" style="text-decoration:none; color:black;">KAY'S SHOES</a>
	<ul style="list-style-type: none;">
	    <?php 
			if(isset($_SESSION['email'])){ 
		?>
		<li style="float:right";><a href="cart.php" style="padding: 16px; text-decoration: none;">Cart</a></li>
		<li style="float:right";><a href="logout.php" style="padding: 16px; text-decoration: none;">Logout</a></li>
		<?php 
		}else{
		?>
		<li style="float:right";><a href="signup.php" style="padding: 16px; text-decoration: none;">Sign Up</a></li>
		<li style="float:right";><a href="login.php" style="padding: 16px; text-decoration: none;">Login</a></li>
		<?php 
			} 
		?>
	</ul>
</nav>