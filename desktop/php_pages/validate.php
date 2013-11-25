<html>

<body>

<?php

//Sets the database connection details
$conn = mysqli_connect('localhost', 'db200249489', '12154', 'db200249489') or die('Error connecting to MySQL server');

//Sets the user input to variables
$username = $_POST['username'];
$password = sha1($_POST['password']);


//Searches the database for a user who matches the details and selects the unique identifier of that user
$sql = "SELECT admin_id FROM comp2068_admin_users WHERE admin_username = '$username' AND admin_password = '$password'";

//Puts it all together the user information with the database query
$result = mysqli_query($conn, $sql) or die('Error querying database.');

//Saves the amount of rows returned from the database
$count = mysqli_num_rows($result);


if ($count >= 1) {
	echo 'Logged in Successfully.';	
	while ($row = mysqli_fetch_array($result)) {
		//access the existing session created by the web server
		session_start(); 
		
		//store the user id in the session object
		$_SESSION['user_id'] = $row['admin_id'];
		
		//redirect the user
		header('Location: admin_users.php');
}

}
else {
	echo '<h2>Access Denied!</h2> <br>';
	echo 'Either the password or the username you entered is incorrect. <br>';
	echo 'Please try again <a href="login.html">return to log in page</a> <br>';
}

mysqli_close($conn);

?>

</body>
</html>
