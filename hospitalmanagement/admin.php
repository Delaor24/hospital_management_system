
<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(img/admin_login.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="full_width">
		<div class="ful_width_nab">
			<ul>
				<li><a href="addDoctor.php">Add Doctor</a></li>
				<li><a href="doctorList.php">Doctor List</a></li>
				<li><a href="addPatient.php">Add patients</a></li>
				<li><a href="patientsList.php">patients list</a></li>
				<li><a href="discharge_patient.php">Discharge patient</a></li>
				<li><a href="patients_bill.php">Bill</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		
		
		<div class="banner">
            <img src="img/14.jpg" alt="">		
		</div>
		<div class="content">


	   </div>
		
		
	</div>
	<div class="full_container">
		<div class="main_warper">
	
				<div class="footerdown">
					<div class="footer_left">
						<h3>Address: 18/F Bir Uttam Qazi Nuruzzaman road,
					West Panthapath,Dhaka.
					</div>
					
					<div class="footer_right">
						<h3>Phone:019292-04727 </h3>
					    <h3>Email: deloar801@gmail.com</h3>
						
					</div>
					

				</div>
			</div>	
		</div>
	</div>
	

	
</body>
</html>