<?php
session_start();

if(isset($_POST['submit'])){

$dbservername="localhost";
$dbusername="root";
$dbpasword="";
$dbname="pdeatry";

$conn=mysqli_connect($dbservername,$dbusername,$dbpasword,$dbname);

	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	

				$sql= "SELECT * FROM users WHERE username='$uid'";
				$result= mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				
				if($resultCheck<1){
					header("Location: ../loginsystem/login.php?login=error");
					exit();
				}
				else{
					if($row=mysqli_fetch_assoc($result)){
						$hashedpwdcheck=password_verify($pwd,$row['pass']);
					if($hashedpwdcheck==false){
						header("Location: ../loginsystem/login.php?login=passworderror");
						exit();
					}elseif($hashedpwdcheck==true){
						//logging in the user here
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////					
					$_SESSION['u_id']=$row['userno'];
						$_SESSION['u_first']=$row['fname'];
						$_SESSION['u_last']=$row['lname'];
						$_SESSION['u_email']=$row['email'];
						$_SESSION['u_uid']=$row['username'];
						$_SESSION['u_dob']=$row['dob'];
						$_SESSION['u_vehicle']=$row['vehicle'];
						$_SESSION['u_plateno']=$row['plateno'];
						
						$_SESSION['u_ttime']=$row['ttime'];
						$_SESSION['u_avdist']=$row['avdist'];
						$_SESSION['u_npd']=$row['npd'];
						$_SESSION['u_harshturn']=$row['harshturn'];
						$_SESSION['u_harshacc']=$row['harshacc'];
						$_SESSION['u_harshbr']=$row['harshbr'];
						$_SESSION['u_addition']=$row['addition'];
						$_SESSION['u_score']=$row['score'];
						$_SESSION['u_badge']=$row['badge'];
						$_SESSION['u_rank']=$row['rank'];
						header("Location: ../loginsystem/index.php?login=success");
						exit();
					}
					}
				}
			}
else{
	header("Location: ../loginsystem/login.php?login=error");
	exit();
}
?>