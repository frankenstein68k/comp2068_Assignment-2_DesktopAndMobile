<html>
<head>
<title>Business Contacts</title>
<link rel="stylesheet" href="css/normalize.css"> 

</head>

<body>
<?php

//access the current session
session_start();

//evaluate the user_id stored in the session that was set on validate.php
if (empty($_SESSION['user_id'])) {
	header('Location: ../login.html');
}

else {
//Credentials to connect to database
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');

//SQL statement to retrieve access level of the user accessing this area
$sql = "SELECT admin_access_level FROM comp2068_admin_users WHERE admin_id = $_SESSION[user_id]";

//Puts the credentials and database statement together
$result = mysqli_query($conn, $sql);	
		
//Executes and retrieves database data
$row = mysqli_fetch_array($result);

//Closes database connection			
mysqli_close($conn);
	
//Stores the user access to a variable	
$access_level = $row[admin_access_level];

//If the user only have access level 1 they are told they don't have a high enough access level and a link back is provided
if ($access_level == 1) {
	echo "<h2>Insufficient Access Level</h2>";
	echo "<p>You not allowed to see other admin users or edit their settings<br>";
	echo "Please <a href=\"admin_users.php\">click here</a> to return to the business contacts page</p>";
}

if ($access_level > 1) {
	echo "<h2>Welcome to the Administrative Area</h2>";
	echo "<h3>Admin Users</h3>";
	echo "<div><!--Creates a table for users--><table border=\"1\"><tr><th>Last name</th><th>First name</th><th>Email</th><th>Username</th><th>Access Level</th><th>Update Information</th><th>Delete User</th></tr></div>";
	
	
//Connection information and SQL query
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
$sql = "SELECT admin_lname, admin_fname, admin_email, admin_username, admin_access_level, admin_id FROM comp2068_admin_users ORDER BY admin_lname";
	
$result = mysqli_query($conn, $sql);
	
//Code to retrieve information from MYSQL database	
while ($row = mysqli_fetch_array($result)) {
	echo '<tr><td>' . $row['admin_lname'] . '</td>
		<td>' . $row['admin_fname'] . '</td>
		<td>' . $row['admin_email'] . '</td>
		<td>' . $row['admin_username'] . '</td>
		<td>' . $row['admin_access_level'] . '</td>
		<td><a href="edit_admin_users.php?id=' . $row['admin_id'] . '">Edit</a></td>
		<td><a href="delete_admin_users.php?id=' . $row['admin_id'] . '" onclick="return confirm(\'Are you want to delete this business contact?\');">Delete</a></td></tr>';
}
			
mysqli_close($conn);


}
}
?>



</body>
</html>