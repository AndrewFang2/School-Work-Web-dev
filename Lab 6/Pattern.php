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
	<?php 
	for ($j = 0; $j <= 5; $j++ ){ 
            echo "*"; 
	}
	echo "<br>";
	for ($i = 0; $i <= 3; $i++ ){ 
		echo "*";
		for ($s = 0; $s <= 7; $s++ ){ 
			echo "&nbsp"; 
		}
		echo "*";
		echo "<br>";
	}
	for ($j = 0; $j <= 5; $j++ ){ 
            echo "*"; 
	}
	?>  
</div>        
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html>