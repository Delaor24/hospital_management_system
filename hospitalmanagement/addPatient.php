<?php include 'configs/dbConnection.php';?>
<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>


<?php


if(isset($_POST['submit'])){
	$patientName = $_POST['patientName'];
	$address = $_POST['address'];
	$contactNo = $_POST['contactNo'];
	$disease = $_POST['disease'];
	$doctorID = $_POST['doctorID'];

	$sql = "insert into add_patients (doctor_id,patient_name,patient_address,patient_contact_no,patient_disease) values ('$doctorID','$patientName','$address','$contactNo','$disease')";
	$result = mysqli_query($con,$sql);
	if($result){
		header("Location:patientsList.php");
	
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
	<title>Add patients page</title>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		
	.footerLenght{
	   margin-top: 300px;
    }
	</style>
</head>
<body style="background: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="full_width">
		<div class="ful_width_nab">
			<ul>
				<li><a href="addDoctor.php">Add Doctor</a></li>
				<li><a href="doctorList.php">Doctor List</a></li>
				
				<li><a href="addPatient.php"  class="active">Add patients</a></li>
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
							<td><label for="">Patient Name</label></td>
							<td><input class="formDesign" type="text" name="patientName" value="" placeholder="Enter Patient Name"></td>
					    </tr>
					    <tr>
							<td><label for="">Address</label></td>
							<td><input class="formDesign" type="text" name="address" value="" placeholder="Enter address"></td>
					    </tr>
					    <tr>
							<td><label for="">Contact No</label></td>
							<td><input class="formDesign" type="text" name="contactNo" value="" placeholder="Enter  contact no"></td>
					    </tr>

					    <tr>
							<td><label for="">Disease</label></td>
							<td><input class="formDesign" type="text" name="disease" value="" placeholder=""></td>
					    </tr>


					    <!-- <tr>
					    							<td><label for="">Doctor Name</label></td>
					    							<td><select name="doctorName" id="" class="formDesign">
					    								<option value="name">select Doctor name</option>
					    								<option value="name">dr. pobir</option>
					    								<option value="name">dr. pobir</option>
					    								<option value="name">dr. pobir</option>
					    								<option value="name">dr. pobir</option>
					    								<option value="name">dr. pobir</option>
					    							</select></td>
					    </tr> -->

					    <tr>
							<td><label for="">Doctor ID</label></td>
							<td><input class="formDesign" type="number" name="doctorID" value="" placeholder="Enter Doctor ID"></td>
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