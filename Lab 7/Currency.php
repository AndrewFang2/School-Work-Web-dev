<html>
	<head>
		<title>Lab 5</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>

	<body>
		<div id="header"><h1>Computer Engineering Technology - Computing Science<br>Web Programming</h1></div>
	<div id="menu">
    		<a href='Arrays.php'>Arrays</a>&nbsp;
    		<a href='Currency.php'>Currency</a>&nbsp;
    		<a href='Vehicle.php'>Vehicle</a>&nbsp;
	</div>
<form action="" method="get">
  <label for="Converter">Convert</label>
  <input type="number" name="input">
  <select name="current" id="current">
    <option value="Canadian Dollar">Canadian Dollar</option>
    <option value=" New Zealand Dollar"> New Zealand Dollar</option>
    <option value="US Dollar">US Dollar </option>
  </select>
to
  <select name="convertto" id="convertto">
    <option value="Canadian Dollar">Canadian Dollar</option>
    <option value="New Zealand Dollar"> New Zealand Dollar</option>
    <option value="US Dollar">US Dollar </option>
  </select>
  <input type="submit" value="Submit">
</form>
<h3>Conversion Results</h3>
<?php
$number = $_GET["input"];
$con = $_GET["current"];
$con2 = $_GET["convertto"];
$rates = array( "Canadian Dollar" => 0.97645, "New Zealand Dollar" => 1.20642, "US Dollar" => 1.0);
$converted_output = ($number/$rates[$con]) * $rates[$con2];
echo $number." ".$con." converts to ".$converted_output." ".$con2;
?>
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html>