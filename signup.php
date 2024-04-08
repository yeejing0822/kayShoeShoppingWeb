<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
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
	<?php require 'header.php'; ?>
	<h1><b>&ensp;SIGN UP</b></h1>
	<form method="post" action="user_registration_script.php">
		<table cellpadding="10px">
			<tr>
				<td>&emsp;<label for="Name">Name:</label></td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>&emsp;<label for="emailAdd">Email address:</label></td>
				<td><input type="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></td>
			</tr>
			<tr>
				<td>&emsp;<label for="password">Password:</label></td>
				<td><input type="password" name="password" required pattern=".{6,}"></td>
			</tr>
			<tr>
				<td>&emsp;<label for="contactNo">Contact no:</label></td>
				<td><input type="tel" name="contact" required></td>
			</tr>
			<tr>
				<td>&emsp;<label for="city">City:</label></td>
				<td><input type="text" name="city" required></td>
			</tr>
			<tr>
				<td>&emsp;<label for="address">Address:</label></td>
				<td><textarea required id="address" rows="5" cols="30" name="address"></textarea></td>
			</tr>
			<tr>
				<td colspan=2><br>&emsp;<input type="submit" value="Sign up"></td>
			</tr>
		</table>
	</form>
	<hr/>
	<p>&emsp;Already have an account? <a href="login.php">Click here</a></p>
</body>
</html>
