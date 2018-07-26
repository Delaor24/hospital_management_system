<?php include 'configs/dbConnection.php';?>

<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>

<?php


if(isset($_POST['submit'])){
	$doctorName = $_POST['doctorName'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contactNo = $_POST['contactNo'];
	$specialist = $_POST['specialist'];
	$day = $_POST['day'];
	$startingTime = $_POST['startingTime'];
	$endTime = $_POST['endTime'];

	$sql = "insert into add_doctor (doctor_name,doctor_address,doctor_email,contact_no,specialist,day,startingTime,endTime) values ('$doctorName','$address','$email','$contactNo','$specialist','$day','$startingTime','$endTime')";
	$result = mysqli_query($con,$sql);
	if($result){
		header("Location:doctorList.php");
	
	}
	else{
		echo "<script>alert('Data Not Inserted')</script>";
		
	}
	


}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Doctor page</title>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		
	.footerLenght{
	   margin-top: 200px;
    }
	</style>
</head>
<body style="background: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="full_width">
		<div class="ful_width_nab">
			<ul>
				<li><a href="addDoctor.php" class="active">Add Doctor</a></li>
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
		
		
		<div class="doctoradd">

			<div class="doctorForm">
				<form action="" method="post">
					<table>
						<tr>
							<td><label for="">Doctor Name</label></td>
							<td><input class="formDesign" type="text" name="doctorName" value="" placeholder="Enter Doctor Name"></td>
					    </tr>
					    <tr>
							<td><label for="">Address</label></td>
							<td><input class="formDesign" type="text" name="address" value="" placeholder="Enter Doctor address"></td>
					    </tr>
					    <tr>
							<td><label for="">Email</label></td>
							<td><input class="formDesign" type="email" name="email" value="" placeholder="Enter Doctor Email"></td>
					    </tr>
					    <tr>
							<td><label for="">Contact No</label></td>
							<td><input class="formDesign" type="text" name="contactNo" value="" placeholder="Enter Doctor Contact Number"></td>
					    </tr>
					    <tr>
							<td><label for="">Specialist in</label></td>
							<td><input class="formDesign" type="text" name="specialist" value="" placeholder="specialist in"></td>
					    </tr>

					    <tr>
							<td><label for="">Working Day</label></td>
							<td><input class="formDesign" type="text" name="day" value="" placeholder="Enter working day"></td>
					    </tr>
					    <tr>
							<td><label for="">Starting Time</label></td>
							<td><input class="formDesign" type="text" name="startingTime" value="" placeholder="Enter starting time"></td>
					    </tr>
					    <tr>
							<td><label for="">End Time</label></td>
							<td><input class="formDesign" type="text" name="endTime" value="" placeholder="Enter End Time"></td>
					    </tr>

					     <tr>
							<td></td>
							<td><input type="submit" name="submit" value="Insert Data" class="btn"></td>
					    </tr>
					</table>
					
					
				</form>
				
			</div>
			
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