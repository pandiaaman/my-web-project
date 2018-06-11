<?php
session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title> Let's evaluate you!</title>
		<link rel="stylesheet" type="text/css" href="style6.css">
		<meta name="author" content="Aman Pandia">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<header> 
			<div id="head">
				<div id="pic">
					<a href="index.php"><h1>Let's evaluate you!</h1></a>
				</div>
				
				<div id="navmenu">
					<?php
						if(isset($_SESSION['u_id'])){
							echo '<form action="logout.php" method="POST">
							<ul><li><button class="lout" type="submit" name="submit"> LOGOUT</button></li></ul>
							</form>';
						}
						else{
							echo '<nav>
							<ul>
								<li><a href="login.php">login</a></li>
							
								<li><a href="signup.php">signup</a></li>
							</ul>
						</nav>';
						
						}
						
						?>
					</div>
			</div>
		</header>
		
		
		
			
		<?php
		if(isset($_SESSION['u_id'])){
			echo '<div id="intro"> <p>you are logged in ';
			echo $_SESSION['u_first'];
			echo ' ';
			echo $_SESSION['u_last'];
			echo'</p>
			</div>
			
			
			
			
			<section>
				<div id="cont6">
			
					<div id="showcase1">
						<h1>SCORE</h1>
						<div id="content1"> <p>';
							echo $_SESSION['u_dob'];
						echo'</p></div></div>
						
						<div id="showcase2">
						<h1>BADGE</h1>
						<div id="content2"> <p>';
							echo $_SESSION['u_badge'];
						echo'</p></div></div>
						
						<div id="showcase3">
						<h1>RANK</h1>
						<div id="content3"> <p>';
							echo $_SESSION['u_rank'];
						echo'</p></div></div>';
			
			
				echo'</div>
			
			
			
			
			<div id="cont1">
			<h2>your details</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit in sapien lacinia gravida. Cras id congue tellus. Suspendisse eleifend et risus quis cursus. Donec sed sapien ac quam volutpat interdum eu quis justo. Quisque cursus, arcu at consectetur luctus, metus sapien rutrum turpis, at pretium risus massa vel neque. Quisque vel mi at lectus sollicitudin congue vitae sed libero. Aenean nunc felis, fermentum ac mi a, interdum porta dolor. Aenean hendrerit convallis lacinia. Donec auctor, dolor sed tempus fringilla, ipsum enim mattis lectus, quis sollicitudin nibh leo ut nunc. Etiam id porttitor dolor. Donec condimentum lorem eget mi vulputate consequat vel non lectus. Phasellus tristique velit vel felis dictum scelerisque.

Curabitur sapien elit, ultricies vel quam ut, vestibulum pellentesque tellus. Etiam interdum massa arcu, at maximus sapien pretium eu. Donec bibendum est non egestas pulvinar. Duis luctus tortor libero. Nam ex neque, fermentum vitae enim nec, vestibulum ullamcorper elit. Pellentesque vehicula convallis mi. Aliquam rutrum vulputate ligula a porttitor. Curabitur a tortor a mi eleifend placerat. Sed sit amet vehicula lacus. Mauris dolor tellus, rhoncus sit amet feugiat in, porttitor dictum purus.</p>
		
		</div>
		<div id="cont2">
			<h2>your details</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit in sapien lacinia gravida. Cras id congue tellus. Suspendisse eleifend et risus quis cursus. Donec sed sapien ac quam volutpat interdum eu quis justo. Quisque cursus, arcu at consectetur luctus, metus sapien rutrum turpis, at pretium risus massa vel neque. Quisque vel mi at lectus sollicitudin congue vitae sed libero. Aenean nunc felis, fermentum ac mi a, interdum porta dolor. Aenean hendrerit convallis lacinia. Donec auctor, dolor sed tempus fringilla, ipsum enim mattis lectus, quis sollicitudin nibh leo ut nunc. Etiam id porttitor dolor. Donec condimentum lorem eget mi vulputate consequat vel non lectus. Phasellus tristique velit vel felis dictum scelerisque.

Curabitur sapien elit, ultricies vel quam ut, vestibulum pellentesque tellus. Etiam interdum massa arcu, at maximus sapien pretium eu. Donec bibendum est non egestas pulvinar. Duis luctus tortor libero. Nam ex neque, fermentum vitae enim nec, vestibulum ullamcorper elit. Pellentesque vehicula convallis mi. Aliquam rutrum vulputate ligula a porttitor. Curabitur a tortor a mi eleifend placerat. Sed sit amet vehicula lacus. Mauris dolor tellus, rhoncus sit amet feugiat in, porttitor dictum purus.</p>

		</div>
		<div id="cont3">
			<h2>WHATyour details</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit in sapien lacinia gravida. Cras id congue tellus. Suspendisse eleifend et risus quis cursus. Donec sed sapien ac quam volutpat interdum eu quis justo. Quisque cursus, arcu at consectetur luctus, metus sapien rutrum turpis, at pretium risus massa vel neque. Quisque vel mi at lectus sollicitudin congue vitae sed libero. Aenean nunc felis, fermentum ac mi a, interdum porta dolor. Aenean hendrerit convallis lacinia. Donec auctor, dolor sed tempus fringilla, ipsum enim mattis lectus, quis sollicitudin nibh leo ut nunc. Etiam id porttitor dolor. Donec condimentum lorem eget mi vulputate consequat vel non lectus. Phasellus tristique velit vel felis dictum scelerisque.

Curabitur sapien elit, ultricies vel quam ut, vestibulum pellentesque tellus. Etiam interdum massa arcu, at maximus sapien pretium eu. Donec bibendum est non egestas pulvinar. Duis luctus tortor libero. Nam ex neque, fermentum vitae enim nec, vestibulum ullamcorper elit. Pellentesque vehicula convallis mi. Aliquam rutrum vulputate ligula a porttitor. Curabitur a tortor a mi eleifend placerat. Sed sit amet vehicula lacus. Mauris dolor tellus, rhoncus sit amet feugiat in, porttitor dictum purus.</p>

		</div>
		<div id="cont4">
			<h2>your details</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit in sapien lacinia gravida. Cras id congue tellus. Suspendisse eleifend et risus quis cursus. Donec sed sapien ac quam volutpat interdum eu quis justo. Quisque cursus, arcu at consectetur luctus, metus sapien rutrum turpis, at pretium risus massa vel neque. Quisque vel mi at lectus sollicitudin congue vitae sed libero. Aenean nunc felis, fermentum ac mi a, interdum porta dolor. Aenean hendrerit convallis lacinia. Donec auctor, dolor sed tempus fringilla, ipsum enim mattis lectus, quis sollicitudin nibh leo ut nunc. Etiam id porttitor dolor. Donec condimentum lorem eget mi vulputate consequat vel non lectus. Phasellus tristique velit vel felis dictum scelerisque.

Curabitur sapien elit, ultricies vel quam ut, vestibulum pellentesque tellus. Etiam interdum massa arcu, at maximus sapien pretium eu. Donec bibendum est non egestas pulvinar. Duis luctus tortor libero. Nam ex neque, fermentum vitae enim nec, vestibulum ullamcorper elit. Pellentesque vehicula convallis mi. Aliquam rutrum vulputate ligula a porttitor. Curabitur a tortor a mi eleifend placerat. Sed sit amet vehicula lacus. Mauris dolor tellus, rhoncus sit amet feugiat in, porttitor dictum purus.</p>

		</div>
		<div id="cont5">
			<h2>your details</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit in sapien lacinia gravida. Cras id congue tellus. Suspendisse eleifend et risus quis cursus. Donec sed sapien ac quam volutpat interdum eu quis justo. Quisque cursus, arcu at consectetur luctus, metus sapien rutrum turpis, at pretium risus massa vel neque. Quisque vel mi at lectus sollicitudin congue vitae sed libero. Aenean nunc felis, fermentum ac mi a, interdum porta dolor. Aenean hendrerit convallis lacinia. Donec auctor, dolor sed tempus fringilla, ipsum enim mattis lectus, quis sollicitudin nibh leo ut nunc. Etiam id porttitor dolor. Donec condimentum lorem eget mi vulputate consequat vel non lectus. Phasellus tristique velit vel felis dictum scelerisque.

Curabitur sapien elit, ultricies vel quam ut, vestibulum pellentesque tellus. Etiam interdum massa arcu, at maximus sapien pretium eu. Donec bibendum est non egestas pulvinar. Duis luctus tortor libero. Nam ex neque, fermentum vitae enim nec, vestibulum ullamcorper elit. Pellentesque vehicula convallis mi. Aliquam rutrum vulputate ligula a porttitor. Curabitur a tortor a mi eleifend placerat. Sed sit amet vehicula lacus. Mauris dolor tellus, rhoncus sit amet feugiat in, porttitor dictum purus.</p>

		</div>
			</section>';
		}
		else{
			
			echo'
			<section>	
			<div id="cont1">
			<h2>ABOUT PDEA</h2>
			<p>With increasing threat  of accidents on road and ignorance of drivers on general safety measures have led to high risk of fatal mishappenings on road. As the number of vehicles are increasing by immense amount, it is essential for everyone to take all possible safety measures and have an assessment of their driving skills, to have their life as well as the vehicle’s life in a good shape for a longer period of time. It is like an enhanced  fitness application for your vehicle to have a better time to time analysis of the driver’s skills engaged with the vehicle. In order to ensure precise evaluation, sensor system comprises of  GPS,  radar and speedometer giving acceleration, braking tendencies such as harsh braking, continuous collection of distances from various obstacles as well as the map for route travelled.

</p> <p>PDEA (Precision Driving Evaluation and Assessment) is a real time tracking of the driver’s skills showing his current status of his driving ability and future scope of improvement. The application will be very helpful for the users to know about the driving precision, their average distance from the obstacles and the average speed of the vehicle. Application will provide proper knowledge of the vehicle’s current  average stats that can be accessed by the user from the website as well as via the mobile application, which will also provide live notifications of the driver’s skill.</p>
		
		</div>
		<div id="cont2">
			<h2>WHY?</h2>
			<p>Road safety is an essential need of the hour that we need to work on.
</p> <p>India, world’s second largest poppulated country, itself notices a large no of loss of lives every year in road accidents.
</p> <p>Rash and aggressive driving is the main cause of all the accidents.
</p> <p>Fleet safety is a key objective for commercial fleets. 
</p> <p>Avoiding infringements, protecting staff, and working to keep the public safe are all important aspects of a successful safety program. 
</p> <p>Do you know the driving skills of the driver of the cab, you are sitting in?
</p> <p>Do you know how good of a driver, any of your fleet member is?
</p> <p>Do you want to improve your driving skills to help keep the roads safe?
</p>

		</div>
		<div id="cont3">
			<h2>OUR TARGERTS</h2>
			<p>Evaluation of your driving skills.
</p> <p>Analysis of your vehicle health.
</p> <p>Keeping roads safer to drive by improving and analysing driver’s skills.
</p> <p>Targets:
</p> <p>General public
</p> <p>Cab companies
</p> <p>Commercial fleets
</p> <p>RTO/Police
</p> <p>All use a fitness band to analyse their body fitness
</p> <p>We aim to make a fitness tracking application for your vehicle and your driving skills
</p> <p>An attempt to increase individual’s attention on their own driving skills and to regularly improve it.
</p> <p>To provide advices to the drivers to improve snd making this learning curve more fun. 

</p>

		</div>
		<div id="cont4">
			<h2>HOW?</h2>
			<p>Using a combination of different technologies we aim to make PDEA, a platform, for general public and commercial sectors, where safe driving is more of a fun.
</p> <p>By continuously analysing acceleration of the vehicle and its distance from the vehicle in front, and using this data to evaluate various sections of driver’s skills.
</p> <p>Giving drivers regular advices to improve their skills and accordingly scoring them, ranking them and giving them badges for achievements, makes it more of a fun game.
</p> <p>Hard acceleration or braking is a driver event when more force than normal is applied to the vehicle’s brake or accelerator.
</p> <p>It is a clear indicator of harsh or aggressive driving known as “lead foot” syndrome.
</p> <p>Also,  HBA (Hard Braking/Acceleration) is an indicator to unsafe driving and is not economic for your vehicle health.
</p> <p>Getting too close to the nearby vehicle also increases the chances of accidents.</p>

		</div>
		<div id="cont5">
			<h2>WHY MONITOR?</h2>
			<p>Wastage of fuel
</p> <p>Poor driving skills
</p> <p>Accidents risks
</p> <p>Aggressive driving
</p> <p>Poor vehicle health
</p> <p>Bad for the planet
</p>

		</div>
			</section>
			
			<div id="social">
			<ul>
				<a href=""><li><img src="ca.jpg"width="60px" height="auto"></li></a>
				<a href=""><li><img src="cb.png"width="60px" height="auto"></li></a>
				<a href=""><li><img src="cc.jpg"width="60px" height="auto"></li></a>
				<a href=""><li><img src="cd.jpg"width="60px" height="auto"></li></a>
			</ul>
		</div>
			
			<section>
			<div id="container">
			<div id="def">
			<p>PDEA (Precision Driving Evaluation and Assessment) is a real time tracking of the driver’s skills showing his current status of his driving ability and future scope of improvement. The application will be very helpful for the users to know about the driving precision, their average distance from the obstacles and the average speed of the vehicle. Application will provide proper knowledge of the vehicle’s current  average stats that can be accessed by the user from the website as well as via the mobile application, which will also provide live notifications of the driver’s skill</p>
			</br><p>WELCOME TO THE WORLD OF PDEA</p>
			<p>All you need to do is follow the following steps:</p>
			<p>Set up your account by logging in and provide  us with your correct details </p>
			<p>set up the hardware with your account and get ready to use it with your vehicle</p>
			<p>drive for the first 10 hours with the PDEA system and get ready to have your assessment afterwards</p>
			<p>Get reviews, scores, ranks, badges and tips on improving your driving skills and your vehicles health</p>
			</br><p>ALL THE BEST</p>
			</br>
			<p > BECAUSE, WHY LET THE MACHINE LEARN EVERYTHING, LETS EXCEL IN THIS AREA AS HUMANS</p></br></br>
			</div>
			';
			
		}
		?>
		
		
		
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

