<?php 
include("links.php");
include("connect.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<div class="container">
		<div class="row" id="row1">
	<h1 class="text-center">Registration Form</h1>
	<br>	</div>
	</div>
		<form method="POST" action="register1.php" enctype="multipart/form-data">
				<center>
					<table>
						<tr>
							<td><label>Username &nbsp; &nbsp;</label></td>
							<td><input type="text" name="username" required placeholder="Unique Username" /></td>
						</tr>
						<tr>
							<td><label>Password &nbsp; &nbsp;</label></td>
							<td><input type="password" name="pwd" required  placeholder="Enter Password" /></td>
						</tr>
						<tr>
							<td><label>Email &nbsp; &nbsp;</label></td>
							<td><input type="text" name="mailid" required  placeholder="Example@gmail.com`" /></td>
						</tr>
						<tr>
							<td><label>Name &nbsp; &nbsp;</label></td>
							<td><input type="text" name="name" required  placeholder="Enter your name" /></td>
						</tr>
						<tr>
							<td><label>Contact &nbsp; &nbsp;</label></td>
							<td><input type="number" name="contact" required  placeholder="Enter contact number" /></td>
						</tr>
						<tr>
							<td><label>Street Address &nbsp; &nbsp;</label></td>
							<td><input type="text" name="streetaddress" required  placeholder="Enter Street Address" /></td>
						</tr>

						<tr>
							<td><label>Landmark &nbsp; &nbsp;</label></td>
							<td><input type="text" name="landmark" required  placeholder="Enter Street Address" /></td>
						</tr>

						<tr>
							<td><label>Postal Code &nbsp; &nbsp;</label></td>
							<td><input type="number" name="postalcode" required  placeholder="Enter postal code" /></td>
						</tr>
						<tr>
							<td><label>Profile Image &nbsp; &nbsp;</label></td>
							<td><input type="file" name="image" ></td>

						</tr>
						<tr>
							<td colspan="4"  class="text-center">
								<br>
								<button type="submit" name="submit" class="btn btn-warning">REGISTER NOW</button>
							</td>
						</tr>
					</table>
				</center>
			</form>

	
</body>
</html>