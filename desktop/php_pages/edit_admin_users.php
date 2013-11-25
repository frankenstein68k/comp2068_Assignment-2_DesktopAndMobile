<html>
	<head>

		<?php

		//access the current session
		session_start();

		//Get the user id
		$userID = $_SESSION['user_id'];

		if (!empty($_GET['id'])) {

			$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
			$sql = "SELECT admin_access_level FROM comp2068_admin_users WHERE admin_id = $userID";

			$result = mysqli_query($conn, $sql);

			//store the values for this record in variables
			$row = mysqli_fetch_array($result);
			$access_level = $row['admin_access_level'];

			//closes connection with database
			mysqli_close($conn);

			if ($access_level == 3) {
				//get the id from the query string and use this in the where clause to retrieve this admin record
				$id = $_GET['id'];
				$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
				$sql = "SELECT * FROM comp2068_admin_users WHERE admin_id = $id";

				$result = mysqli_query($conn, $sql);

				//store the values for this record in variables
				$row = mysqli_fetch_array($result);
				$lname = $row['admin_lname'];
				$fname = $row['admin_fname'];
				$email = $row['admin_email'];
				$username = $row['admin_username'];
				$access_level = $row['admin_access_level'];

				//closes connection with database
				mysqli_close($conn);

				echo "</head><body><!--Beginning of a form to hold the admin data to be editted-->
				<form method=\"post\" action=\"update_admin_users.php\">
				<div>
					<label for=\"lname\">Last name: *</label>
					<input name=\"lname\" value=\" $lname\" >
				</div>
				<div>
					<label for=\"fname\">First name: *</label>
					<input name=\"fname\" value=\"$fname\" />
				</div>
				<div>
					<label for=\"email\">Email: *</label>
					<input name=\"email\" value=\"$email\" >
				</div>
				<div>
					<label for=\"username\">Username: *</label>
					<input name=\"username\" value=\"$username\" >
				</div>	
				<div>
					<label for=\"access_level\">Access Level: *</label>
					<input name=\"access_level\" value=\"$access_level\" >
				</div>	
				<input name=\"id\" type=\"hidden\" value=\"$id\" />
				<input type=\"submit\" value=\"Save\" />
				<a href=\"administrate_administrators.php\"><button>Cancel Edit</button></a>
				</form>
				<p>All fields with an asterisk must be completed</p>";
			} 
			elseif ($acces_level != 3) {
				echo "<title>Error - Insufficient Access Level</title></head><body>";
				echo "You don't have enough clearance, please return to the <a href=\"administrate_administrators.php\">Administrative Area</a>";
			}
		}
	?>
</body>
