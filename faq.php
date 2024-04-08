<?php
    $servername = "localhost";
    $dbname = "shop";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$QRY = "Select * from faq_store";
	$QRY_TOP = "Select * from faq_top_store";
	
	$q = $conn->query($QRY);
	$q_top = $conn->query($QRY_TOP);

	$q->setFetchMode(PDO::FETCH_ASSOC);
	$q_top->setFetchMode(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Frequently Asked Questions</title>
	<link rel="stylesheet" type="text/css" href="css/faq_design.css">
</head> 
<body>
	<div id="top_panel">
		<link rel="shortcut icon" href="img/logo_image.png">
		<a href="index.php"><img src="img/logo_image.png" alt="Logo" width="200" height="200"></a>
		<h1 style="background-color:transparent; font-size:45px;">How can we help you?</h1>
		<input type="text" placeholder="Question" id="myInput">
		<button id="btn-search" onclick="searchFunction()">Search</button>
	</div>
	
	<div id="ease_list">
		<h1>Quick Search</h1>
		<ul>
			<h3>SHIPPING</h3>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='WHEN WILL YOU RECEIVE MY RETURN PACKAGE?';searchFunction();">
				WHEN WILL YOU RECEIVE MY RETURN PACKAGE?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='WHAT ARE THE SHIPPING OPTIONS?';searchFunction();">
				WHAT ARE THE SHIPPING OPTIONS?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='HOW DO I GET FREE SHIPPING?';searchFunction();">
				HOW DO I GET FREE SHIPPING?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='HOW DO I TRACK MY ORDER STATUS?';searchFunction();">
				HOW DO I TRACK MY ORDER STATUS?
				</a>
			</li>
		</ul>
		<ul>
			<h3>PRODUCTS</h3>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='WHAT IF I CAN'T FIND THE PRODUCT(S) I'M LOOKING FOR?';searchFunction();">
				WHAT IF I CAN'T FIND THE PRODUCT(S) I'M LOOKING FOR?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='CAN I EXCHANGE MY PRODUCT(S)?';searchFunction();">
				CAN I EXCHANGE MY PRODUCT(S)?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='CAN I CANCEL OR CHANGE MY ORDER?';searchFunction();">
				CAN I CANCEL OR CHANGE MY ORDER?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='WHERE IS MY REFUND?';searchFunction();">
				WHERE IS MY REFUND?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='DO SHOES HAVE A WARRANTY?';searchFunction();">
				DO SHOES HAVE A WARRANTY?
				</a>
			</li>
		</ul>
		<ul>
			<h3>OTHERS</h3>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='PUBLIC HOLIDAYS AND DISTRIBUTION CENTRE CLOSURES?';searchFunction();">
				PUBLIC HOLIDAYS AND DISTRIBUTION CENTRE CLOSURES?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='WHAT DO I DO IF MY QUESTION ISN'T COVERED HERE?';searchFunction();">
				WHAT DO I DO IF MY QUESTION ISN'T COVERED HERE?
				</a>
			</li>
			<li>
				<a href="#" onclick="document.getElementById('myInput').value='HOW DO I CLEAN MY SHOES??';searchFunction();">
				HOW DO I CLEAN MY SHOES?
				</a>
			</li>
		</ul>
	</div>
	
	<div id="top_list">
		<h1>Top Questions</h1>
		<hr/>
		<?php while ($row = $q_top->fetch()): ?>
		<h2><?php echo $row['Title']?></h2>
		<p><?php echo $row['Description']?></p>
		<p>&nbsp;</p>
		<?php endwhile; ?>
	</div>
	
	<div id="search_list">
		<h2 id="results"></h2>
		<ul>
			<?php while ($row = $q->fetch()): ?>
			<li>
				<a href="#"><?php echo $row['Title']?><br/><br/><?php echo $row['Description']?><br/><br/></a>	
			</li>
			<?php endwhile; ?>  
		</ul>
	</div>

	<footer class="footer">
		<p>&emsp;&copy 2020 KAY's Shoes Malaysia Sdn Bhd.</p>
	</footer>
	
	<script>
		// Click Enter to Search
		var input = document.getElementById("myInput");
		input.addEventListener("keyup", function(event) {
			if (event.keyCode === 13) {
				event.preventDefault();
				document.getElementById("btn-search").click();
			}
		});
		
		function searchFunction() {
			// Show hidden Search List
			document.getElementById("search_list").style.display = "block";
		
			// Search Code
			var input, filter, div, li, a, i, txtValue;
			var count = 0;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			div = document.getElementById("search_list");
			li = div.getElementsByTagName("li");
			for (i = 0; i < li.length; i++) {
				a = li[i].getElementsByTagName("a")[0];
				txtValue = a.textContent || a.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "";
					count++;
				} else {
					li[i].style.display = "none";
				}
			}
		
			// Search Result
			if (count == 0){
				document.getElementById("results").innerHTML = "No result found.";
			} else {
				document.getElementById("results").innerHTML = count + " possible result(s) found!";
			}
		
			// Hide Quick Search and Top Question Section
			document.getElementById("ease_list").style.display = "none";
			document.getElementById("top_list").style.display = "none";
		}
	</script>
</body>
</html>
