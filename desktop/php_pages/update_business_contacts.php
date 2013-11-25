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

if (empty($_POST['cpphone'])) {
	echo 'A primary phone number is required<br />';
	$complete = false;
}

if (empty($_POST['csphone'])) {
	echo 'A secondary phone number is required<br />';
	$complete = false;
}

if (empty($_POST['company'])) {
	echo 'A company name is required<br />';
	$complete = false;
}

if (empty($_POST['address'])) {
	echo 'A company address is required<br />';
	$complete = false;
}

//if form completed, connect and save edited record to 
if ($complete) {
	$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
	$sql = "UPDATE comp2068_business_contacts SET contact_lname = '$_POST[lname]', contact_fname = '$_POST[fname]', contact_email = '$_POST[email]', contact_pri_phone = '$_POST[cpphone]', contact_sec_phone = '$_POST[csphone]', contact_company = '$_POST[company]', contact_address = '$_POST[address]' WHERE contact_id = $_POST[id];";
					
	mysqli_query($conn, $sql);
	mysqli_close($conn);

	//redirect to list of admin users
	header('Location:admin_users.php');
}


?>


</body>
</html>