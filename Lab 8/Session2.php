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
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html