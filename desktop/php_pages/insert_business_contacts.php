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

//if form completed, connect and save new record to 
if ($complete) {
	$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Connect Error');
	$sql = "INSERT INTO comp2068_business_contacts (contact_lname, contact_fname, contact_email, contact_pri_phone, contact_sec_phone, contact_company, contact_address) VALUES ('$_POST[lname]', '$_POST[fname]', '$_POST[email]', '$_POST[cpphone]', '$_POST[csphone]', '$_POST[company]', '$_POST[address]')";
					
	mysqli_query($conn, $sql);
	mysqli_close($conn);

	//redirect to list of admin users
	header('Location:admin_users.php');
}


elseif ($complete == false){
	echo 'The above statements describe the problems with creating a new business contact<br />';
	echo 'Please remedy them by clicking back or clicking on this <a href="add_business_contacts.php">link</a> below to return to the "New Business Contact Page" <br />';
}


?>


</body>
</html>