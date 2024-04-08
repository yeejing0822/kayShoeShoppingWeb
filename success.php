<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
    }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/logo_image.png">
	<title>KAY'S Shoes</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div>
		<?php
			require 'header.php';
		?>
		<br>
		<p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
		<footer class="footer">
			<p>&copy 2020 KAY's Shoes Malaysia Sdn Bhd.</p>
		</footer>
	</div>
</body>
</html>
