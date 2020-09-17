<?php include("header.php"); ?>
<?php
    include("db_config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
        $customerfName = $_POST['customerfName']; 
		$customerlName = $_POST['customerlName']; 
		$phoneNumber = $_POST['phoneNumber']; 
		$emailAddress = $_POST['emailAddress']; 
		$username = $_POST['username']; 
		$referral = $_POST['referral']; 
        $sql = "INSERT INTO `mailingList`(`firstName`, `lastName`, `phoneNumber`, `emailAddress`, `username`, `referrer`) VALUES ('$customerfName', '$customerlName', '$phoneNumber', '$emailAddress', '$username', '$referral')";
		if($customerfName && $customerlName && $phoneNumber && $emailAddress && $username && $referral) {	
            $result = mysqli_query($conn,$sql);	
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		    $active = $row['active'];
		    $count = mysqli_num_rows($result);
		}else {
			$error = "Invalid enter everything";
		}
	}
?>
            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post">
                        <table>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="customerfName" id="customerfName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="customerlName" id="customerlName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                            </tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referral" size="1">
                                      <option value="Unknown">Select referer</option>
                                      <option value="newspaper">Newspaper</option>
                                      <option value="radio">Radio</option>
                                      <option value="tv">Television</option>
                                      <option value="other">Other</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                </div><!-- End Main -->
            </div><!-- End Content -->
            
    <?php include("footer.php");?>
