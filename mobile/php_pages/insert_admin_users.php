<html>
	<head>
		<title>Error with data input</title>
	</head>
	<body>

		<?php

		//access the current session
		session_start();

		//Get the user id
		$userID = $_SESSION['user_id'];

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

			//validate all fields
			$complete = true;

			if (empty($_POST['lname'])) {
				echo 'A last name is required<br>';
				$complete = false;
			}

			if (empty($_POST['fname'])) {
				echo 'A first name is required<br>';
				$complete = false;
			}

			if (empty($_POST['email'])) {
				echo 'An email address is required<br>';
				$complete = false;
			}

			if (empty($_POST['username'])) {
				echo 'A username is required<br>';
				$complete = false;
			}

			if (empty($_POST['password'])) {
				echo 'A password is required<br>';
				$complete = false;
			}

			if (empty($_POST['access_level'])) {
				echo 'An access level is required<br>';
				$complete = false;
			}

			if ($_POST['access_level'] > 3 || $_POST['access_level'] < 1) {
				echo 'An access level between 1-3 is required<br>';
				$complete = false;
			}

			//if form completed, connect and save new record to
			if ($complete) {
				$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
				$sql = "INSERT INTO comp2068_admin_users (admin_lname, admin_fname, admin_email, admin_username, admin_password, admin_access_level) VALUES ('$_POST[lname]', '$_POST[fname]', '$_POST[email]', '$_POST[username]', sha1('$_POST[password]'), '$_POST[access_level]')";

				mysqli_query($conn, $sql);
				mysqli_close($conn);

				//redirect to list of admin users
				header('Location:administrate_administrators.php');
			}

			//if the form is incomplete it shows the offending errors and displays the message below
			elseif ($complete == false) {
				echo 'The above statements describe the problems with creating a new business contact<br>';
				echo 'Please remedy them by clicking back or clicking on this <a href="add_admin_users.php">link</a> below to return to the "New Administrator" <br>';
			}
		}
		else {
			echo "<title>Error - Insufficient Access</title></head><body>";
			echo "You don't have enough clearance, please return to the <a href=\"administrate_administrators.php\">Administrative Area</a>";
		}
		?>
	</body>
</html>