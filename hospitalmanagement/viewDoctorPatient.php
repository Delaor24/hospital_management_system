<?php include 'configs/dbConnection.php';?>
<?php

session_start();

if(!isset($_SESSION['doctorLogin'])){
	header("Location:index.php");
}



?>
<?php
$sql = "select p.patient_id,p.patient_name,p.patient_address,p.patient_contact_no,p.patient_disease,add_doctor.doctor_name as doctorName from add_patients as p , add_doctor where p.doctor_id = add_doctor.doctor_id";
$result = mysqli_query($con,$sql);




?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view all patients Doctor</title>
	
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="css/doctor_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	.footerLenght{
	   margin-top: 400px;
    }
</style>
</head>
<body style="background: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="full_width">
		<div class="ful_width_nab">
			<ul>
				<li><a href="doctorDetails.php">My Details</a></li>
				<li><a href="viewDoctorPatient.php" class="active">View assigned patient</a></li>
				<li><a href="doctorLogout.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="table_show_data">
			<table id="customers">
				  <tr>
				    <th>Serial</th>
				    <th>Name</th>
				    <th>Address</th>
				    <th>Contact No</th>
				    <th>Disease</th>
				    <th>Doctor Name</th>
				  </tr>
				  <?php while($row = mysqli_fetch_assoc($result)){?>
				  <tr>
				    <td><?=$row['patient_id'];?></td>
				    <td><?=$row['patient_name'];?></td>
				    <td><?=$row['patient_address'];?></td>
				    <td><?=$row['patient_contact_no'];?></td>
				    <td><?=$row['patient_disease'];?></td>
				    <td><?=$row['doctorName'];?></td>
				  </tr>

				  <?php }?>




				  
				  
				</table>
		</div>
		
		
		
	</div>

	<div class="full_container footerLenght">
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