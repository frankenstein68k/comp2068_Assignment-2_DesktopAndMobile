<html>
<head>
</head>
<body>

<?php

//if form completed, connect and save new record to db
if (!empty($_GET['id'])) {
	//redirect to list of courses
	header('Location:admin_users.php');
}

else {
	$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
	$sql = "DELETE FROM comp2068_admin_users WHERE contact_id = $_GET[id];";
					
	mysqli_query($conn, $sql);
	mysqli_close($conn);
}


?>


</body>
</html>