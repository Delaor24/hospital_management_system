<?php include 'configs/dbConnection.php';?>

<?php

session_start();

if(!isset($_SESSION['adminLogin'])){
	header("Location:index.php");
}



?>

<?php
if(isset($_GET['edit'])){
  	$editID = $_GET['edit'];

$sql = "select p.patient_id,p.patient_name,p.patient_address,p.patient_contact_no,p.patient_disease,add_doctor.doctor_id as doctor_id from add_patients as p left join add_doctor on p.doctor_id = add_doctor.doctor_id where p.patient_id = $editID";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patients update</title>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
		
		
		<div class="doctoradd">

			<div class="doctorForm">
				<form action="updatePatient.php?edit=<?=$row['patient_id']?>" method="post">
					<table>
						<tr>
							<td><label for="">Patient Name</label></td>
							<td><input class="formDesign" type="text" name="patientName" value="<?=$row['patient_name'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Address</label></td>
							<td><input class="formDesign" type="text" name="address" value="<?=$row['patient_address'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Contact No</label></td>
							<td><input class="formDesign" type="text" name="contactNo" value="<?=$row['patient_contact_no'];?>"></td>
					    </tr>

					    <tr>
							<td><label for="">Disease</label></td>
							<td><input class="formDesign" type="text" name="disease" value="<?=$row['patient_disease'];?>"></td>
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
							<td><input class="formDesign" type="number" name="doctorID" value="<?=$row['doctor_id'];?>"></td>
					    </tr>
					    
					     <tr>
							<td></td>
							<td><input type="submit" name="submit" value="Update Data" class="btn"></td>
					    </tr>
					</table>
					
				</form>
				<?php } ?>




				<?php

						if(isset($_POST['submit'])){
							$patientName = $_POST['patientName'];
							$address = $_POST['address'];
							$disease = $_POST['disease'];
							$contactNo = $_POST['contactNo'];
							$doctorID = $_POST['doctorID'];

			
                         $sql = "UPDATE add_patients as p set p.doctor_id = $doctorID,p.patient_name = '$patientName',p.patient_address = '$address',p.patient_contact_no = '$contactNo',p.patient_disease = '$disease',add_doctor.doctor_name = '$doctorName' as doctorName  left join add_doctor on p.doctor_id = add_doctor.doctor_id where p.patient_id = $editID";



							$result = mysqli_query($con,$sql);
							if($result){
								
								header("Location:patientsList.php");
							
							}
							else{
								echo "<script>alert('Data Not Updated')</script>";
								header("Location:patientsList.php");
								
							}
							
						}


						?>
				
			</div>
			
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