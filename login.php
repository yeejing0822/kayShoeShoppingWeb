<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo_image.png">
        <title>KAY's Shoes</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
		<?php require 'header.php'; ?>
		<h1><b>&ensp;LOGIN</b></h1>
		<form method="post" action="login_submit.php">
			<table cellpadding="10px">
				<tr>
					<td>&emsp;<label for="emailAdd">Email address:</label></td>
					<td><input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">&emsp;</td>
				</tr>
				<tr>
					<td>&emsp;<label for="password">Password:</label></td>
					<td><input type="password" class="form-control" name="password" pattern=".{6,}"></td>
				</tr>
				<tr>
					<td colspan=2><br>&emsp;<input type="submit" value="Login" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
		<hr/>
		<p>Don't have an account yet? <a href="signup.php">Register</a></p>
    </body>
</html>
