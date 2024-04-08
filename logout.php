<?php
    session_start();
    session_unset();
    session_destroy();
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
		<br>
		<p>You have been logged out. <a href="login.php">Login again.</a></p>

		<footer class="footer">
			<p>&copy 2020 KAY's Shoes Malaysia Sdn Bhd.</p>
		</footer>
    </body>
</html>
