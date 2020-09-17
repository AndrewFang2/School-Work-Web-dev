<html>
	<head>
		<title>Create a Account</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<script>
			function showEmployee(str) {
				if (str == "") {	
					document.getElementById("txtHint").innerHTML = "";
					return;
				} else {
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("txtHint").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET","GetEmployee.php?q="+str,true);
					xmlhttp.send();
				}
			}
		</script>
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
				$sql = "SELECT EmployeeId,FirstName,LastName FROM Employee";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					echo '<form>';
						echo '<select name="Employee" onchange="showEmployee(this.value)">';
							echo '<option value="">Select a person:</option>';
    							while($rw = mysqli_fetch_array($result)) {
        							echo '<option value="'.$rw["EmployeeId"].'">'.$rw['FirstName'] ." ". $rw['LastName'].'</option>';
							}
						echo '</select>';
					echo '</form>';
				} else {
    					echo "0 users";
				}
				$conn->close();
			?>
			<br>
			<div id="txtHint"><b>Person info will be listed here...</b></div>	
		</div>
		<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
	</body>
</html>
