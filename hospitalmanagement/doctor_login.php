<?php include 'configs/dbConnection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>doctor login</title>
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
    .submit_login{
    	width: 60px;
    	color: blue;
    	margin-top: 20px;
    	cursor:pointer;
    	padding: 6px 18px;
    	text-align: center;
    	margin-bottom: 30px;

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
			<h3>Doctor Login</h3>
		</div>
		<form action="" method="post" class="form_login_class">
			<table>
				<div>
					<tr>
					<td><lebel>Email</lebel></td>
			        <td><input type="email" name="email" value="" placeholder="Enter Email" class="text_login"></td>
				</tr>

				</div>
				
				<div>
					<tr>
					<td><lebel>password</lebel></td>
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
		<?php

            if(isset($_POST['submit'])){
					$email = $_POST['email'];
					$password = $_POST['password'];

					$sql = "select * from add_doctor where doctor_email = '$email' and contact_no = '$password'";

					$result = mysqli_query($con,$sql);
					

					$row = mysqli_num_rows($result);
					if($row > 0){
						$_SESSION['doctorLogin']=true;

						header("Location:doctor_page.php");
					}
					else{
						echo "<script>alert('Username and password invalid please try again')</script>";
					}
                }


		?>
	</div>
</body>
</html>