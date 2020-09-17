<?php include("header.php"); ?>
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
                    <h1>Mailing List</h1>
			<?php
				include("db_config.php");
				$sql = "SELECT * FROM mailingList";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<br> Name: ". $row["firstName"]. " " . $row["lastName"] . " - Number:" . $row["phoneNumber"] . " - Email: " . $row["emailAddress"] . " <br>";
					}
				} else {
					echo "0 users";
				}
				$conn->close();
			?>
                </div><!-- End Main -->
            </div><!-- End Content -->
            
    <?php include("footer.php"); ?>
