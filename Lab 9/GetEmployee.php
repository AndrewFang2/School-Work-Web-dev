<?php
	$q = intval($_GET['q']);
	$con = mysqli_connect("localhost", "sfangcom_cst8238", "k2d!qB59kghe9js", "sfangcom_cst8238");
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	mysqli_select_db($con,"ajax_demo");
	$sql="SELECT * FROM Employee WHERE EmployeeId = '".$q."'";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)) {
		echo "<br> id: ". $row["EmployeeId"]. " - Name: ". $row["FirstName"]. " " . $row["LastName"] . " - Email: " . $row["EmailAddress"] . " - Number: " . $row["TelephoneNumber"] . " - SIN: " . $row["SocialInsuranceNumber"] . " - Password: " . $row["Password"] ."<br>";
	}
	mysqli_close($con);
?>