<html>
<head>

<?php

//get the id from the query string and use this in the where clause to retrieve this admin record
$id = $_GET['id'];
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
$sql = "SELECT * FROM comp2068_admin_users WHERE admin_id = $id";
					
$result = mysqli_query($conn, $sql);

//store the values for this record in variables 					
$row = mysqli_fetch_array($result);
$lname = $row['admin_lname'];
$fname = $row['admin_fname'];
$email = $row['admin_email'];
$username = $row['admin_username'];
$access_level = $row['admin_access_level'];  

//closes connection with database					
mysqli_close($conn);
?>


</head>
<body>
	<!--Beginning of a form to hold the admin data to be editted-->
	<form method="post" action="update_admin_users.php">
		<div>
			<label for="lname">Last name: *</label>
			<input name="lname" value="<?php echo $lname; ?>" >
		</div>
		<div>
			<label for="fname">First name: *</label>
			<input name="fname" value="<?php echo $fname; ?>" />
		</div>
		<div>
			<label for="email">Email: *</label>
			<input name="email" value="<?php echo $email; ?>" >
		</div>
		<div>
			<label for="username">Username: *</label>
			<input name="username" value="<?php echo $username; ?>" >
		</div>	
		<div>
			<label for="access_level">Access Level: *</label>
			<input name="access_level" value="<?php echo $access_level; ?>" >
		</div>	
		<input name="id" type="hidden" value="<?php echo $id; ?>" />
		<input type="submit" value="Save" />
		<a href="administrate_administrators.php"><button>Cancel Edit</button></a>
	</form>
	<p>All fields with an asterisk must be completed</p>
</body>