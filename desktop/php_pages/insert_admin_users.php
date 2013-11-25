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

if (empty($_POST['password'])) {
	echo 'A password is required<br />';
	$complete = false;
}

if (empty($_POST['access_level'])) {
	echo 'An access level is required<br />';
	$complete = false;
}

if ($_POST['address']>3 || $_POST['address']<1) {
	echo 'An access level between 1-3 is required<br />';
	$complete = false;
}

//if form completed, connect and save new record to 
if ($complete) {
	$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
	$sql = "INSERT INTO comp2068_admin_users (admin_lname, admin_fname, admin_email, admin_pri_phone, admin_sec_phone, admin_company, admin_address) VALUES ('$_POST[lname]', '$_POST[fname]', '$_POST[email]', '$_POST[cpphone]', '$_POST[csphone]', '$_POST[company]', '$_POST[address]')";
					
	mysqli_query($conn, $sql);
	mysqli_close($conn);

	//redirect to list of admin users
	header('Location:administrate_administrators.php');
}


elseif ($complete == false){
	echo 'The above statements describe the problems with creating a new business contact<br />';
	echo 'Please remedy them by clicking back or clicking on this <a href="add_admin_users.php">link</a> below to return to the "New Administrator" <br />';
}


?>


</body>
</html>