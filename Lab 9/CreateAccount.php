<?php
	$db = mysqli_connect("localhost", "sfangcom_cst8238", "k2d!qB59kghe9js", "sfangcom_cst8238");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$FirstName = mysqli_real_escape_string($db,$_POST['FirstName']); 
		$LastName = mysqli_real_escape_string($db,$_POST['LastName']); 
		$EmailAddress = mysqli_real_escape_string($db,$_POST['EmailAddress']); 
		$TelephoneNumber = mysqli_real_escape_string($db,$_POST['TelephoneNumber']); 
		$SocialInsuranceNumber = mysqli_real_escape_string($db,$_POST['SocialInsuranceNumber']); 
		$Password = mysqli_real_escape_string($db,$_POST['Password']); 
		$sql = "INSERT INTO Employee (FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) VALUES ('$FirstName', '$LastName', '$EmailAddress', '$TelephoneNumber', '$SocialInsuranceNumber', '$Password')";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		$count = mysqli_num_rows($result);
		if($FirstName && $LastName && $EmailAddress && $TelephoneNumber && $SocialInsuranceNumber && $Password) {
			header("location: ViewAllEmployees.php");		
		}else {
			$error = "Invalid enter everything";
		}
	}
?>
<html>
	<head>
		<title>Create a Account</title>
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
						<label>First Name:</label><input type = "text" name = "FirstName" class = "box"/><br /><br />
						<label>Last Name:</label><input type = "text" name = "LastName" class = "box"/><br /><br />
						<label>Email:</label><input type = "text" name = "EmailAddress" class = "box"/><br /><br />
						<label>Phone Number:</label><input type = "Phone" name = "TelephoneNumber" class = "box" /><br/><br />	
						<label>SIN:</label><input type = "text" name = "SocialInsuranceNumber" class = "box"/><br /><br />
						<label>Password:</label><input type = "Password" name = "Password" class = "box" /><br/><br />
						<input type="submit" value="Submit information"><br>
					</form>
					<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>				
				</div>		
			</div>		
		</div>
		<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
	</body>
</html>