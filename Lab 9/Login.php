<?php
	$db = mysqli_connect("localhost", "sfangcom_cst8238", "k2d!qB59kghe9js", "sfangcom_cst8238");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$EmailAddress = mysqli_real_escape_string($db,$_POST['EmailAddress']);
		$Password = mysqli_real_escape_string($db,$_POST['Password']); 
		$sql = "SELECT EmployeeId FROM Employee WHERE EmailAddress = '$EmailAddress' and Password = '$Password'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		$count = mysqli_num_rows($result);	
		if($EmailAddress && $Password) {
			header("location: ViewAllEmployees.php");
		}else {
			$error = "Your Login Name or Password is invalid";
		}
	}
?>

<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />      
	</head>
	<body>
		<div id="header"><h1>Computer Engineering Technology - Computing Science<br>Web Programming</h1></div>
		<div id="menu">			
			<a href='CreateAccount.php'>Create Account</a>&nbsp;
			<a href='Login.php'>Login</a>&nbsp;
			<a href='ViewAllEmployees.php'>View All Employees</a>&nbsp;
			<a href='Employee.php'>Employee</a>&nbsp;
		</div>
		<div id="content" style="background-color:#e6bbad">
			<div style = "width:300px; border: solid 1px #333333; " align = "left">
				<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>		
				<div style = "margin:30px">
					<form action = "" method = "post">
						<label>Email:</label><input type = "text" name = "EmailAddress" class = "box"/><br /><br />
						<label>Password:</label><input type = "Password" name = "Password" class = "box"/><br/><br />
						<input type = "submit" value = " Submit "/><br />
					</form>
					<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>			
				</div>		
			</div>		
		</div>
		<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
	</body>
</html>