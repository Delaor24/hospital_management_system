<?php include 'configs/dbConnection.php';?>
<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>
<?php


if(isset($_POST['submit'])){

$patient_id = $_POST['patient_id'];
$discharge_details = $_POST['discharge_details'];
$payment = $_POST['payment'];
$medicine = $_POST['medicine'];
$others = $_POST['others'];
$total_bill = $_POST['total_bill'];
$total_paid = $_POST['total_paid'];
$total_due = $_POST['total_due'];



$sql = "INSERT INTO patient_discharge (patient_id,details,doctor_payment,medicine,others,total_bill,total_paid,due) values ($patient_id,'$discharge_details',$payment,$medicine,$others,$total_bill,$total_paid,$total_due)";

$result = mysqli_query($con,$sql);
if($result){
   echo "Data inserted";
}else{
	echo "Not inserted";
}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Discharge patient</title>
	<link rel="stylesheet" type="text/css" href="css/doctor_css.css">
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		
	.footerLenght{
	   margin-top: 140px;
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
				<li><a href="discharge_patient.php" class="active">Discharge patient</a></li>
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
							<td><label for="">Patient ID</label></td>
							<td><input class="formDesign" type="number" name="patient_id" value="" placeholder="Enter patient ID"></td>
					    </tr>


						<tr>
							<td><label for="">Details</label></td>
							<td><textarea class="formDesign" name="discharge_details" id="" cols="42" rows="2"></textarea></td>
					    </tr>
					    <tr>
							<td><label for="">Doctor payment</label></td>
							<td><input class="formDesign" type="text" name="payment" value="" placeholder="enter doctor visit fee"></td>
					    </tr>
					    <tr>
							<td><label for="">Medicine</label></td>
							<td><input class="formDesign" type="text" name="medicine" value="" placeholder="Enter  medicine amount"></td>
					    </tr>

					    <tr>
							<td><label for="">Others</label></td>
							<td><input class="formDesign" type="text" name="others" value="" placeholder="Enter Other charge"></td>
					    </tr>


					    <tr>
							<td><label for="">Total Bill</label></td>
							<td><input class="formDesign" type="number" name="total_bill" value=""></td>
					    </tr>

					    <tr>
							<td><label for="">Total paid</label></td>
							<td><input class="formDesign" type="number" name="total_paid" value=""></td>
					    </tr>

					    <tr>
							<td><label for="">Due</label></td>
							<td><input class="formDesign" type="number" name="total_due" value=""></td>
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