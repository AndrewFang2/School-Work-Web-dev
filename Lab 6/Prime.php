<html>
	<head>
		<title>Lab 5</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>

	<body>
		<div id="header"><h1>Computer Engineering Technology - Computing Science<br>Web Programming</h1></div>
	<div id="menu">
    		<a href='ChessBoard.php'>ChessBoard</a>&nbsp;
    		<a href='Prime.php'>Prime</a>&nbsp;
    		<a href='Pattern.php'>Pattern</a>&nbsp;
    	</div>
	<div id="content">
<form action="" method="get">
Range 1: <input type="number" name="min">
Range 2: <input type="number" name="max">
<br>
<input type="submit">
</form>	
<?php
$number = $_GET["min"];
while ($number < $_GET["max"] )
{
$div_count=0;
for ( $i=1;$i<=$number;$i++)
{
if (($number%$i)==0)
{
$div_count++;
}
}
if ($div_count<3)
{
echo $number." is a prime number<br>";
}
$number=$number+1;
}
?>
	</div>
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html>