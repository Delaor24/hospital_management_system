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

    $result = mysqli_query($con, "SELECT * from add_doctor WHERE doctor_id=".$id);
    
    $row = mysqli_fetch_assoc($result);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor update</title>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.footerLenght{
			margin-top: 180px;
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
				<li><a href="discharge_patient.php">Discharge patient</a></li>
                <li><a href="patients_bill.php">Bill</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		
		
		<div class="doctoradd">
			
			<div class="doctorForm">

				<form action="updateDoctor.php?id=<?php echo $row['doctor_id']?>" method="post">
					
					<table>
						
						<tr>
							<td><label for="">Doctor Name</label></td>
							<td><input class="formDesign" type="text" name="doctorName" value="<?php echo $row['doctor_name'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Address</label></td>
							<td><input class="formDesign" type="text" name="address" value="<?php echo $row['doctor_address'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Email</label></td>
							<td><input class="formDesign" type="email" name="email" value="<?php echo $row['doctor_email'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Contact No</label></td>
							<td><input class="formDesign" type="text" name="contactNo" value="<?php echo $row['contact_no'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Specialist in</label></td>
							<td><input class="formDesign" type="text" name="specialist" value="<?php echo $row['specialist'];?>"></td>
					    </tr>

					     <tr>
							<td><label for="">Working Day</label></td>
							<td><input class="formDesign" type="text" name="day" value="<?php echo $row['day'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Starting Time</label></td>
							<td><input class="formDesign" type="text" name="startingTime" value="<?php echo $row['startingTime'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">End Time</label></td>
							<td><input class="formDesign" type="text" name="endTime" value="<?php echo $row['endTime'];?>"></td>
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
							$doctorName = $_POST['doctorName'];
							$address = $_POST['address'];
							$email = $_POST['email'];
							$contactNo = $_POST['contactNo'];
							$specialist = $_POST['specialist'];

							$sql = "UPDATE  add_doctor SET doctor_name = '$doctorName',doctor_address = '$address',doctor_email = '$email', contact_no = '$contactNo',specialist = '$specialist' where doctor_id = $id";
							$result = mysqli_query($con,$sql);
							if($result){
								$_SESSION['success']=1;
								header("Location:doctorList.php");
							
							}
							else{
								echo "<script>alert('Data Not Updated')</script>";
								
							}
							
						}


						?>
				
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