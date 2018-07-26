<?php include 'configs/dbConnection.php';?>
<?php
session_start();

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from admin_login where username = '$username' and password = '$password'";

	$result = mysqli_query($con,$sql);
	$row = mysqli_num_rows($result);
	if($row > 0){
        $_SESSION['adminLogin']=true;
		header("Location:admin.php");
	}
	else{
		echo "<script>alert('Username and password invalid please try again')</script>";
	}
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin login</title>
</head>
<style>
body{
	background: url(img/4.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
	.admin_login{
		width: 600px;
		margin: 0 auto;
		margin-top: 150px;
		
		
	}
	.text_login{
		padding: 8px;
		width: 300px;
		
		


	}
    .pass_login{
    	padding: 8px;
		width: 300px;
		
		

    }
    .btn{
    	width: 100px;
	    padding: 8px 16px;
	    cursor: pointer;
	    background-color: #05988E;
	    margin-top: 14px;
	    margin-bottom: 10px;
	    color: blue;
    }
    
   

    
    
.header_admin{}
.header_admin h3{
	color:gray;
}
</style>
<body>
	<div class="admin_login">
		<div class="header_admin">
			<h3>Admin Login</h3>
		</div>
		<form action="" method="post" class="form_login_class">
			<table>
				<div>
					<tr>
					<td><lebel>Username</lebel></td>
			        <td><input type="text" name="username" value="" placeholder="Enter username" class="text_login"></td>
				</tr>

				</div>
				
				<div>
					<tr>
					<td><lebel>Password</lebel></td>
			       <td> <input type="password" name="password" value="" placeholder="Enter password" class="pass_login"></td><br>
				</tr>
					
				</div>
				
				<tr>
					<td></td>
			        <td><input type="submit" name="submit" value="Login" class="btn">
			        <input type="reset" name="submit" value="Reset" class="btn"></td>
				</tr>
			</table>
			
		</form>
	</div>
</body>
</html>