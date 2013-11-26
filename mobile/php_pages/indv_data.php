<html>
	<head>
		<title>Business Contacts</title>
	</head>

	<body>

		<!--Creates a table for the business contact selected-->
		<table border="1">
			<tr>
				<th>Last name</th><th>First name</th><th>Contact Email</th><th>Primary Phone Number</th><th>Secondary Phone Number</th><th>Company</th><th>Address</th>
			</tr>

			<?php

			//access the current session
			session_start();

			$id = $_GET['id'];

			//evaluate the user_id stored in the session that was set on validate.php
			if (empty($_SESSION['user_id'])) {
				header('Location: ../login.html');
			} 
			else {
				//Connection information and SQL query
				$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
				$sql = "SELECT * FROM comp2068_business_contacts WHERE contact_id = $id";

				$result = mysqli_query($conn, $sql);

				//Code to retrieve information from MYSQL database
				$row = mysqli_fetch_array($result);
				echo '<tr><td>' . $row['contact_lname'] . '</td>
				<td>' . $row['contact_fname'] . '</td>
				<td>' . $row['contact_email'] . '</td>
				<td>' . $row['contact_pri_phone'] . '</td>
				<td>' . $row['contact_sec_phone'] . '</td>
				<td>' . $row['contact_company'] . '</td>
				<td>' . $row['contact_address'] . '</td></tr>';
				
				//Closes connection with the database
				mysqli_close($conn);
			}
		?>
</table>
		<br>
		<!--This button closes the windows showing the individual business contact using JavaScript-->
		<button type="button" onclick="window.open('', '_self', ''); window.close();">
			Close this window
		</button>
	</body>
</html>