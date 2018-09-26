<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/icon.png" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.js"></script>
	<title>Library System</title>
	<style type="text/css">
		body{
			background-color: #1c2331;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row" id="row1">
			<h1 class="text-center">WELCOME TO PUBLIC LIBRARY</h1>
			<center>
			<button id="btn1" onclick="myFunction()" class="btn btn-success text-center btn1">ADMIN LOGIN</button>
			<button id="btn2" onclick="myFunction1()" class="btn btn-info text-center btn1">USER LOGIN</button>
			<a href="register.php"><button class="btn btn btn-warning btn1">Register Now</button></a>
			</center>
			<br>

			<div id="panel1" class="text-center">
			<form method="post" action="adminlogin.php">
				<center>
					<table>
					<tr>
						<td><label>Username &nbsp; &nbsp;</label></td>
						<td><input type="text" name="adminuser" required placeholder="admin@admin.com" /></td>
					</tr>
					<tr>
						<td><label>Password &nbsp; &nbsp;</label></td>
						<td><input type="password" required name="pwd" placeholder="Enter Password" /></td>
					</tr>
					<tr>
						<td colspan="4"  class="text-center">
							<button type="submit" name="submit" class="btn btn-warning">LOGIN</button>
						</td>	
					</tr>
				</table>
				</center>
			</form>
			</div>	
		
			<div id="panel2" class="text-center">
			<form method="post" action="userlogin.php">
			<center>

					<table>
						<tr>
							<td><label>Username &nbsp; &nbsp;</label></td>
							<td><input type="text" name="username" required placeholder="user@user.com" /></td>
						</tr>
						<tr>
							<td><label>Password &nbsp; &nbsp;</label></td>
							<td><input type="password" name="pwd" required placeholder="Enter Password" /></td>
						</tr>
						<tr>
							<td colspan="4"  class="text-center">
								<button type="submit" name="submit" class="btn btn-warning">LOGIN</button>
							</td>
						</tr>
					</table>
				
			</center>					
			</form>
		</div>
	</div>
	<script type="text/javascript">
		function myFunction() {
			document.getElementById("panel1").style.display = "block";
			document.getElementById("panel2").style.display = "none";
			
		}
		function myFunction1() {
			document.getElementById("panel2").style.display = "block";
			document.getElementById("panel1").style.display = "none";
		}
	</script>
</body>
</html>