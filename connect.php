<?php
if(isset($_POST['submit'])){

$dbservername="localhost";
$dbusername="root";
$dbpasword="";
$dbname="pdeatry";

$conn=mysqli_connect($dbservername,$dbusername,$dbpasword,$dbname);


	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$cpwd=mysqli_real_escape_string($conn,$_POST['cpwd']);
	$dob=mysqli_real_escape_string($conn,$_POST['dob']);
	$vehicle=mysqli_real_escape_string($conn,$_POST['vehicle']);
	$plateno=mysqli_real_escape_string($conn,$_POST['plateno']);
	
	if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
			header("Location: ../loginsystem/signup.php?signup=invalid");
			exit();
		}
		else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../loginsystem/signup.php?signup=invalidemail");
			exit();
			}
			else{
				$sql= "SELECT * FROM users WHERE username='$uid'";
				$result= mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				
				if($resultCheck>0){
					header("Location: ../loginsystem/signup.php?signup=usertaken");
					exit();
				}
				else{
					if($pwd!=$cpwd){
						header("Location: ../loginsystem/signup.php?signup=passwordconfirmationerror");
						exit();
					}
					else{
					$hashed=password_hash($pwd,PASSWORD_DEFAULT);
					$hashedc=password_hash($cpwd,PASSWORD_DEFAULT);
					$sql="INSERT INTO users (fname, lname,email,username,pass,dob,vehicle,plateno) VALUES ('$first','$last','$email','$uid','$hashed','$dob','$vehicle','$plateno');";
					$result=mysqli_query($conn,$sql);
					header("Location: ../loginsystem/index.php?signup=success");
					exit();
				}
			}
		}		
}
}
else{
	header("Location: ../loginsystem/signup.php");
	exit();
}
?>