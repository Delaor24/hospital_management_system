<?php
include 'configs/dbConnection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">


	<style type="text/css">
		
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #F0EB67;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: white;
}

li.dropdown {
    display: block;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F0EB67;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: blue;
    
    text-decoration: none;
    display: block;
    
    text-align: left;

}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}


	</style>
</head>
<body style="background: url(img/10.jpg);background-repeat: no-repeat;background-size: cover;">
	<!--header part-->
	<div class="full_container">
		<div class="main_warper">
			<div class="left_logo">
				<a href="index.php"><h2>Hospital Management System</h2></a>
			</div>
			<div class="right_nav">
				<ul>
				  <li><a href="index.php">Home</a></li>
				  <li><a href="about_us.php">About Us</a></li>
				  <li><a href="doctorListUser.php">Doctor List</a></li>
				  <li class="dropdown">
				    <a href="javascript:void(0)" class="dropbtn">login</a>
				    <div class="dropdown-content">
				      <a href="admin_login.php">admin login</a>
				      <a href="doctor_login.php">doctor login</a>
				      
				    </div>
				  </li>
				</ul>
				
			</div>	
		</div>
	</div>

	<div class="main_warper">
		
		<img src="img/index.jpg" alt="" width="100%"; height="550px;">
	</div>





	<!--footer part-->
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