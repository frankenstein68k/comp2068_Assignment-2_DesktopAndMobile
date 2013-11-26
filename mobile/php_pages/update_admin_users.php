<html>
<head>
</head>
<body>

<?php

//validate all fields
$complete = true;

if (empty($_POST['lname'])) {
	echo 'A last name is required<br />';
	$complete = false;
}

if (empty($_POST['fname'])) {
	echo 'A first name is required<br />';
	$complete = false;
}

if (empty($_POST['email'])) {
	echo 'An email address is required<br />';
	$complete = false;
}

if (empty($_POST['username'])) {
	echo 'A username is required<br />';
	$complete = false;
}

if (empty($_POST['access_level'])) {
	echo 'A access level is required<br />';
	$complete = false;
}

if ($_POST['access_level']>3 || $_POST['access_level']<1 ) {
	echo 'A access level between 1 and 3 is required<br />';
	$complete = false;
}

//if form completed, connect and save edited record to 
if ($complete) {
	$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
	$sql = "UPDATE comp2068_admin_users SET admin_lname = '$_POST[lname]', admin_fname = '$_POST[fname]', admin_email = '$_POST[email]', admin_username = '$_POST[username]', admin_access_level = '$_POST[access_level]' WHERE admin_id = $_POST[id];";
					
	mysqli_query($conn, $sql);
	mysqli_close($conn);

	//redirect to list of admin users
	header('Location:administrate_administrators.php');
}


?>


</body>
</html>