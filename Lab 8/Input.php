<html>
	<head>
		<title>Lab 8</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>

	<body>
		<div id="header"><h1>Computer Engineering Technology - Computing Science<br>Web Programming</h1></div>
		<div id="menu">
    			<a href='Input.php'>Input</a>&nbsp;
    			<a href='Session1.php'>Session1</a>&nbsp;
    			<a href='Session2.php'>Session2</a>&nbsp;
		</div>
	<div id="content">
<div class="row" >
  <div class="column" style="background-color:#e6bbad;" >
    <form method="get">
	Employee Name: <input type="text" name="Name"><br>
	Employee ID: <input type="text" name="ID"><br>
	Employee Telephone: <input type="text" name="Telephone"><br>
	Employee email: <input type="text" name="email"><br>
	Position:<br>
	<input type="radio" id="Manager" name="Position" value="Manager">
	<label for="Manager">Manager</label>
	<input type="radio" id="Team Lead" name="Position" value="Team Lead">
	<label for="female">Team Lead</label><br>
	<input type="radio" id="IT Developer" name="Position" value="IT Developer">
	<label for="IT Developer">IT Developer</label>
	<input type="radio" id="IT Analyst" name="Position" value="IT Analyst">
	<label for="IT Analyst">IT Analyst</label><br>
	Project: <select name="Project[ ]" id="Project" multiple>
    <option value="Project A">Project A</option>
    <option value="Project B">Project B</option>
    <option value="Project C">Project C</option>
    <option value="Project D">Project D</option>
  </select><br>
	<input type="submit">
  </form>
  </div>
  <div class="column">
    <?php
$Name = $_GET["Name"];
$ID = $_GET["ID"];
$Telephone = $_GET["Telephone"];
$email = $_GET["email"];
$Position = $_GET["Position"];

echo "Employee name: ".$Name."<br>";
echo "Employee ID: ".$ID."<br>";
echo "Employee Telephone: ".$Telephone."<br>";
echo "Employee Email: ".$email."<br>";
echo "Employee Position: ".$Position."<br>";
echo "Employee Project: ";
foreach ($_GET['Project'] as $Pro)
{
        print " $Pro";
}
?>
  </div>
</div>
	</div>
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html