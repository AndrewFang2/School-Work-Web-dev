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
	<div id="content">
<h3>No Key Array - Output using foreach</h3>
<?php
$noKeyArray = array(10, 20, 30, 40);
var_dump($noKeyArray);
echo "<br><h3>No Key Array - Output using foreach</h3>";
foreach($noKeyArray as $x => $x_value) {
  echo "key: " . $x . ", value: " . $x_value . ", key data type: " . gettype($x_value);
  echo "<br>";
}
?>

<h3>int Key Array - Output using var_dump</h3>
<?php
$stringKeyArray = array("key1" => "item1", "key2" => "item1");
var_dump($stringKeyArray);
echo "<br><h3>int Key Array - Output using foreach</h3>";
foreach($stringKeyArray as $x => $x_value) {
  echo "key: " . $x . ", value: " . $x_value . ", key data type: " . gettype($x_value);
  echo "<br>";
}
?>

<h3>string Key Array - Output using var_dump</h3>
<?php
$intKeyArray = array("item1", "item2", "item3");
var_dump($intKeyArray);
echo "<br><h3>string Key Array - Output using foreach</h3>";
foreach($intKeyArray as $x => $x_value) {
  echo "key: " . $x . ", value: " . $x_value . ", key data type: ". gettype($x_value);
  echo "<br>";
}
?>

<h3>mixed Key Array - Output using var_dump</h3>
<?php
$mixedKeyArray = array("key1" => "item1", "key2" => "item1", 2 => "item8", 4 => "item4", 5 => "item5", 3 => "item6", 1 => "item7");
var_dump($mixedKeyArray);
echo "<br><h3>mixed Key Array - Output using foreach</h3>";
foreach($mixedKeyArray as $x => $x_value) {
  echo "key: " . $x . ", value: " . $x_value . ", key data type: ". gettype($x_value);
  echo "<br>";
}
?>

<h3>Multi-dimensional Array - Output using var_dump</h3>
<?php
$multiDimensionArray = array(array(10, 20),array(30, 40));
var_dump($multiDimensionArray);
echo "<br>";
$keys = array_keys($multiDimensionArray);
for($i = 0; $i < count($multiDimensionArray); $i++) {
    echo "level 1 key: " . $keys[$i];
    echo "<br><h3>Multi-dimensional Array - Output using foreach</h3>";
    foreach($multiDimensionArray[$keys[$i]] as $key => $value) {
	echo "key: " . $key . ", value: " . $value . ", key data type: ". gettype($value);
	echo "<br>";
    }
}
?>
	</div>
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html>