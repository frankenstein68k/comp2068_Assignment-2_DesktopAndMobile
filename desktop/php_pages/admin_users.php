<html>
	<head>
		<title>Business Contacts</title>
	</head>

	<body>
		<h2>Business Contacts</h2>
		<br>
		<!--Creates a table for users-->
		<table border="1">
			<tr>
				<th>Last name</th><th>First name</th><th>Company</th><th>More Information</th><th>Update Information</th><th>Delete User</th>
			</tr>

			<?php

			//access the current session
			session_start();

			//evaluate the user_id stored in the session that was set on validate.php, if it's empty the user is redirected to login
			if (empty($_SESSION['user_id'])) {
				header('Location: ../login.html');
			} 
			
			//If the user is authenticated this displays a table of business contacts
			else {
				//Connection information and SQL query
				$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
				$sql = "SELECT contact_lname, contact_fname, contact_company, contact_id FROM comp2068_business_contacts ORDER BY contact_lname";

				$result = mysqli_query($conn, $sql);

				//Code to retrieve information from MYSQL database
				while ($row = mysqli_fetch_array($result)) {
					echo '<tr><td>' . $row['contact_lname'] . '</td>
					<td>' . $row['contact_fname'] . '</td>
					<td>' . $row['contact_company'] . '</a></td>
					<td><a href="indv_data.php?id=' . $row['contact_id'] . '" target="_blank">Expand</a></td>
					<td><a href="edit_business_contacts.php?id=' . $row['contact_id'] . '">Edit</a></td>
					<td><a href="delete_business_contacts.php?id=' . $row['contact_id'] . '" onclick="return confirm(\'Are you want to delete this business contact?\');">Delete</a></td></tr>';
				}

				//Closes connection with database
				mysqli_close($conn);
			}
			?>
			
		</table>
		
		<!--This allows the user to add a new business contact and visit the administrative area depending on their access level, it allows any user to logout-->
		<?php
			echo "<br><a href=\"add_business_contacts.php\"><button>Add New Business Contact</button></a><a href=\"administrate_administrators.php\"><button>Administrative Area</button></a><a href=\"logout.php\"><button>Log Out</button></a>";
		?>
	</body>
</html>