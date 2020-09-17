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
			<?php
				$conn = mysqli_connect("localhost", "sfangcom_cst8238", "k2d!qB59kghe9js", "sfangcom_cst8238");
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT * FROM Employee";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<br> id: ". $row["EmployeeId"]. " - Name: ". $row["FirstName"]. " " . $row["LastName"] . " - Email: " . $row["EmailAddress"] . " - Number: " . $row["TelephoneNumber"] . " - SIN: " . $row["SocialInsuranceNumber"] . " - Password: " . $row["Password"] ."<br>";
					}
				} else {
					echo "0 users";
				}
				$conn->close();
			?>
		</div>
		<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
	</body>
</html>