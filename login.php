<?php
session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title> login system</title>
		<link rel="stylesheet" type="text/css" href="style6.css">
	</head>
	
	<body>
		<header>
		<div id="head">
		<div id="pic">
					<a href="index.php"><h1>LETS EVALUATE YOU</h1></a>
				</div>
<div id="navmenu">		
			<nav>
				<ul>
					<li><a href="signup.php">SIGNUP</a>	</li>
					<li><a href="index.php">HOME</a>	</li>
				</ul>
				
				
			</nav>
			</div>
			</div>
		</header>
		
		<section>
		<div id="containform1">
		<div id="imgg">
			<img src="k.png" width="80px" height="auto">
		</div>
		<form action="loginconnect.php" method="post"> 
					<input type="text" name="uid" placeholder="username" required></br>
					<input type="password" name="pwd" placeholder="password" required></br>
					<button  class="btn" type="submit" name="submit"> login </button>
				</form>
				<div id="sgn">
				
				</div>
		</div>
		</section>
		<div id="container">
		<div id="boxes">
			<div class="box">
				<img src="k.png" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="l.png" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="m.png" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="n.png" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
		</div>
		
		</div>
		<div id="foot">
		<footer>
				<p> copyright &copy;</p>

		</footer>
		</div>
		
	</body>
</html>

