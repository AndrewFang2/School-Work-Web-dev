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
<div id="content"><table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table></div>        
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html>