<?php
	include("db_config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$EmailAddress = $_POST['Username'];
		$Password = $_POST['Password']; 
		$sql = "SELECT EmployeeId FROM adminusers WHERE Username = '$Username' and Password = '$Password'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		$count = mysqli_num_rows($result);	
		if($EmailAddress && $Password) {
			header("location: internal.php");
		}else {
			$error = "Your Login Name or Password is invalid";
		}
	}
?>

<?php include("header.php"); ?>
        <!-- MESSAGES -->
        <?php
            //Missing username/password
            if($missingFields){
                echo '<h3 style="color:red;">Please enter both a username and a password</h3>';
            }
            //Authentication failed
            if(isset($websiteUser)){
                if(!$websiteUser->isAuthenticated()){
                    echo '<h3 style="color:red;">Login failed. Please try again.</h3>';
                }
            }
        ?>
        
        <form name="login" id="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="Username" id="Username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="Password" id="Password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="Login"></td>
                <td><input type="reset" name="reset" id="reset" value="Reset"></td>
            </tr>
        </table>
            <?php echo '<p>Session ID: ' . session_id() . '</p>';?>
        </form>
<?php include("footer.php");?>