<?php include 'configs/dbConnection.php';?>
<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>
<?php

$sql = "select p.patient_id,p.patient_name,p.patient_address,p.patient_contact_no,p.patient_disease,add_doctor.doctor_name as doctorName from add_patients as p left join add_doctor on p.doctor_id = add_doctor.doctor_id";

$result = mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>patients bill page</title>
	
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="css/doctor_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		
	.footerLenght{
	   margin-top: 350px;
    }
	</style>
</head>
<body style="background: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="full_width">
		<div class="ful_width_nab">
			<ul>
				<li><a href="addDoctor.php">Add Doctor</a></li>
				<li><a href="doctorList.php">Doctor List</a></li>
				<li><a href="addPatient.php">Add patients</a></li>
				<li><a href="patientsList.php">patients list</a></li>
				<li><a href="discharge_patient.php">Discharge patient</a></li>
				<li><a href="patients_bill.php" class="active">Bill</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="table
		_show_data">
			<table id="customers">
				  <tr>
				    <th>Serial</th>
				    <th>Name</th>
				    <th>Address</th>
				    <th>Contact No</th>
				    <th>Disease</th>
				    <th>Doctor Name</th>
				    <th>Action</th>
				  </tr>
             <?php while($row = mysqli_fetch_assoc($result)){?>
				  <tr>
		
				    <td><?=$row['patient_id'];?></td>
				    <td><?=$row['patient_name'];?></td>
				    <td><?=$row['patient_address'];?></td>
				    <td><?=$row['patient_contact_no'];?></td>
				    <td><?=$row['patient_disease'];?></td>
				    <td><?=$row['doctorName'];?></td>
				    <td>
				    	<a href="bill.php?id=<?=$row['patient_id'];?>">Show Bill</a>
				    	
				    </td>
				  </tr>
				  <?php } ?>

				    

				  
				  
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