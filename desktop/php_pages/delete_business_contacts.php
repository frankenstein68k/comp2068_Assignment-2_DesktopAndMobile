<html>
	<head></head>
	<body>

		<?php
		//Takes the ID given by the hyperlink to execute a MySQL script to delete the business contact
		if (!empty($_GET['id'])) {
			$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
			$sql = "DELETE FROM comp2068_business_contacts WHERE contact_id = $_GET[id];";

			mysqli_query($conn, $sql);
			mysqli_close($conn);

			//redirect to list of courses
			header('Location:admin_users.php');
		}
	?>
	</body>
</html>