<?php include 'configs/dbConnection.php';?>
<?php

session_start();

if(!isset($_SESSION['doctorLogin'])){
	header("Location:index.php");
}



?>

<?php

if(isset($_POST['submit'])){
  $id = $_POST['searchID'];

   $sql = "select * from add_doctor where doctor_id=$id";
   $result = mysqli_query($con,$sql);

   while ($row = mysqli_fetch_assoc($result)) {
   



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor Details</title>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="css/doctor_css.css">
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
				<li><a href="doctorDetails.php" class="active">My Details</a></li>
				<li><a href="viewDoctorPatient.php">View assigned patient</a></li>
				
				
				<li><a href="doctorLogout.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		
		
		<div class="searchBtn">
			<form action="" method="post">
				<label for="">Search ID</label>
				<input type="text" name="searchID" value="" class="search_btn"  placeholder="Search ID" >
				<input type="submit" name="submit" value="search" class="btn">
			</form>
		</div>

		<div class="doctorForm">
				<form action="" post>
					<table>
						<tr>
							<td><label for="">Doctor Name</label></td>
							<td><input class="formDesign" type="text" name="doctorName" value="<?=$row['doctor_name'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Address</label></td>
							<td><input class="formDesign" type="text" name="address" value="<?=$row['doctor_address'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Email</label></td>
							<td><input class="formDesign" type="email" name="email" value="<?=$row['doctor_email'];?>"></td>
					    </tr>
					    <tr>
							<td><label for="">Contact No</label></td>
							<td><input class="formDesign" type="text" name="contactNo" value="<?=$row['contact_no'];?>" ></td>
					    </tr>
					    <tr>
							<td><label for="">Specialist in</label></td>
							<td><input class="formDesign" type="text" name="specialist" value="<?=$row['specialist'];?>"></td>
					    </tr>
					    
					</table>
					
					
				</form>
   				<?php

   }
   
}
else{?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor page</title>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<link rel="stylesheet" type="text/css" href="css/doctor_css.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		.footerLenght{
	   margin-top: 260px;
	</style>
</head>
<body style="background: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
	<div class="full_width">
		<div class="ful_width_nab">
			<ul>
				<li><a href="doctorDetails.php" class="active">My Details</a></li>
				<li><a href="viewDoctorPatient.php">View assigned patient</a></li>
				
				
				<li><a href="index.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		
		
		<div class="searchBtn">
			<form action="" method="post">
				<label for="">Search ID</label>
				<input type="text" name="searchID" value="" class="search_btn"  placeholder="Search ID" >
				<input type="submit" name="submit" value="search" class="btn">
			</form>
		</div>

		<div class="doctorForm">
				<form action="" post>
					<table>
						<tr>
							<td><label for="">Doctor Name</label></td>
							<td><input class="formDesign" type="text" name="doctorName" value=""></td>
					    </tr>
					    <tr>
							<td><label for="">Address</label></td>
							<td><input class="formDesign" type="text" name="address" value=""></td>
					    </tr>
					    <tr>
							<td><label for="">Email</label></td>
							<td><input class="formDesign" type="email" name="email" value=""></td>
					    </tr>
					    <tr>
							<td><label for="">Contact No</label></td>
							<td><input class="formDesign" type="text" name="contactNo" value="" ></td>
					    </tr>
					    <tr>
							<td><label for="">Specialist in</label></td>
							<td><input class="formDesign" type="text" name="specialist" value=""></td>
					    </tr>
					    
					</table>
					
					
				</form>
   				<?php

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
	
	
</body>
</html>