<?php include 'configs/dbConnection.php';?>
<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>

<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$sql = "select patient_discharge.*, add_patients.patient_name as name from patient_discharge join add_patients on patient_discharge.patient_id = add_patients.patient_id";

	

	$result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bill page</title>
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
		<div class="table_show_data">
			<table id="customers">
				  <tr>
				    <th>Serial</th>
				    <th>Name</th>
				    <th>Details</th>
				    <th> Doctor Payment</th>
				    <th>Medicine</th>
				    <th>Others</th>
				    <th>Total bill</th>
				     <th>Total Paid</th>
				     <th>Due</th>
				  </tr>
                 <?php while($row = mysqli_fetch_assoc($result)){?>
				  <tr>
				    <td><?=$row['discharge_id'];?></td>
				    <td><?=$row['name'];?></td>
				    <td><?=$row['details'];?></td>
				    <td><?=$row['doctor_payment'];?></td>
				    <td><?=$row['medicine'];?></td>
				    <td><?=$row['others'];?></td>
				    <td><?=$row['total_bill'];?></td>
				     <td><?=$row['total_paid'];?></td>
				     <td><?=$row['due'];?></td>
				    
				    </tr>

        <?php 
       }
    }
    ?>
				   

				  
				  
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