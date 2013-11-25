<html>
<head>
<title>Business Contacts</title>
<link rel="stylesheet" href="css/normalize.css"> 

</head>

<body>
<div id="admin_nav">
	<ol>
		<li><a href="logout.php">Log out</a></li>
	</ol>
</div>


<h2>Business Contacts</h2>
<br>
<!--Creates a table for users-->
<table border="1"><tr><th>Last name</th><th>First name</th><th>Company</th><th>More Information</th><th>Update Information</th><th>Delete User</th></tr>

<?php

//access the current session
session_start();

	
//evaluate the user_id stored in the session that was set on validate.php
if (empty($_SESSION['user_id'])) {
	header('Location: ../login.html');
}


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
			
mysqli_close($conn);
}
?>
</table>

<p><a href="add_business_contacts.php">Click here if you would you like to create a new the business contact</a></p>
<p><a href="administrate_administrators.php">Click here if you would you like to view or make changes to the Administrators</a></p>

</body>
</html>