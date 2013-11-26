<html>
	<head></head>
	<body>

		<?php

		//access the current session
		session_start();

		//Get the user id
		$userID = $_SESSION['user_id'];

		//Takes the ID given by the hyperlink to eventually execute a MySQL script to delete the business contact
		if (!empty($_GET['id'])) {

			//Determines if the administrator has a high enough access level to delete users
			$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
			$sql = "SELECT admin_access_level FROM comp2068_admin_users WHERE admin_id = $userID";

			$result = mysqli_query($conn, $sql);

			//store the values for this record in variables
			$row = mysqli_fetch_array($result);
			$access_level = $row['admin_access_level'];

			//closes connection with the database
			mysqli_close($conn);

			//If the administrator has enough priveleges it runs the script to delete the administrator
			if ($access_level == 3) {

				$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
				$sql = "DELETE FROM comp2068_admin_users WHERE admin_id = $_GET[id];";

				mysqli_query($conn, $sql);
				mysqli_close($conn);

				//redirect to list of courses
				header('Location:administrate_administrators.php');
			} 
			
			//If the administrator does not have enough priveleges it shown this page.
			elseif ($acces_level != 3) {
				echo "<title>Error - Insufficient Access</title></head><body>";
				echo "You don't have enough clearance, please return to the <a href=\"administrate_administrators.php\">Administrative Area</a>";
			}
		}
		?>
	</body>
</html>