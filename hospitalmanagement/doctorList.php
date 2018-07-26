
<?php include 'configs/dbConnection.php';?>
<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>
<?php


$sql = "select * from add_doctor";
$result = mysqli_query($con,$sql);


?>











<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor List</title>
	
	
	<link rel="stylesheet" type="text/css" href="css/doctor_css.css">
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		
	.footerLenght{
	   margin-top: 380px;
    }
	</style>
</head>
<body style="background: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="full_width">
		<div class="ful_width_nab">
			<ul>
				<li><a href="addDoctor.php">Add Doctor</a></li>
				<li><a href="doctorList.php" class="active">Doctor List</a></li>
				
				<li><a href="addPatient.php">Add patients</a></li>
				<li><a href="patientsList.php">patients list</a></li>
				<li><a href="discharge_patient.php">Discharge patient</a></li>
				<li><a href="patients_bill.php">Bill</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		<?php if(isset($_SESSION['success'])){?>
			<div class="success">
				<p>Data successfully updated</p>
			
			</div>
           <?php }?>

		<div class="table_show_data">
			<table id="customers">
				  <tr>
				    <th style="width: 5%;">Serial</th>
				    <th style="width: 20%;">Doctor Name</th>
				    <th style="width: 15%;">Address</th>
				    <th style="width: 15%;">Email</th>
				    <th style="width: 10%;">Contact No</th>
				    <th style="width: 15%;">Specialist</th>
				    <th style="width: 15%;">Action</th>
				  </tr>
                     

                
                <?php while($row = mysqli_fetch_assoc($result)){?>
				  <tr>
				    <td><?=$row['doctor_id'];?></td>
				    <td><?=$row['doctor_name'];?></td>
				    <td><?=$row['doctor_address'];?></td>
				    <td><?=$row['doctor_email'];?></td>
				    <td><?=$row['contact_no'];?></td>
				    <td><?=$row['specialist'];?></td>
				    <td>
				    	
				    	<a href="updateDoctor.php?id=<?=$row['doctor_id'];?>">Update</a> |
				    	 
				    	<a href="deleteDoctor.php?id=<?=$row['doctor_id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" role="button">Delete</a>

				    </td>
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

<?php
unset($_SESSION['success']);

?>