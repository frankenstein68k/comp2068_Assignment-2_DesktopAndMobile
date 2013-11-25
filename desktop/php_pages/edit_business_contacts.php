<html>
<head>

<?php

//get the id from the query string and use this in the where clause to retrieve this admin record
$id = $_GET['id'];
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200249489', '12154', 'db200249489') or die('Connect Error');
$sql = "SELECT * FROM comp2068_business_contacts WHERE contact_id = $id";
					
$result = mysqli_query($conn, $sql);

//store the values for this record in variables 					
$row = mysqli_fetch_array($result);
$lname = $row['contact_lname'];
$fname = $row['contact_fname'];
$email = $row['contact_email'];
$cpphone = $row['contact_pri_phone'];
$csphone = $row['contact_sec_phone']; 
$company = $row['contact_company'];
$caddress = $row['contact_address']; 

//closes connection with database					
mysqli_close($conn);
?>


</head>
<body>
	<!--Beginning of a form to hold the contact data to be editted-->
	<form method="post" action="update_business_contacts.php">
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
			<label for="cpphone">Primary Phone Number: *</label>
			<input name="cpphone" value="<?php echo $cpphone; ?>" >
		</div>	
		<div>
			<label for="csphone">Secondary Phone Number: *</label>
			<input name="csphone" value="<?php echo $csphone; ?>" >
		</div>	
		<div>
			<label for="company">Company: *</label>
			<input name="company" value="<?php echo $company; ?>" >
		</div>	
		<div>
			<label for="address">Address: *</label>
			<input name="address" value="<?php echo $caddress; ?>" >
		</div>	
		<input name="id" type="hidden" value="<?php echo $id; ?>" />
		<input type="submit" value="Save" />
		<a href="admin_users.php"><button>Cancel Edit</button></a>
	</form>
	<p>All fields with an asterisk must be completed</p>
</body>