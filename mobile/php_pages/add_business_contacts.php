<html>
	<head>
		<title>Add New Business Contact</title>
	</head>

	<!--Beginning of the form to take the new Business Contact's details-->
	<body>
		<form method="post" action="insert_business_contacts.php">
			<div>
				<label for="lname">Last name: *</label>
				<input name="lname">
			</div>
			<div>
				<label for="fname">First name: *</label>
				<input name="fname">
			</div>
			<div>
				<label for="email">Email: *</label>
				<input name="email">
			</div>
			<div>
				<label for="cpphone">Primary Phone Number: *</label>
				<input name="cpphone">
			</div>
			<div>
				<label for="csphone">Secondary Phone Number: *</label>
				<input name="csphone">
			</div>
			<div>
				<label for="company">Company: *</label>
				<input name="company">
			</div>
			<div>
				<label for="address">Address: *</label>
				<input name="address">
			</div>
			<input type="submit" value="Create new Business Contacts" />
			<a href="admin_users.php">
			<button>
				Cancel New Business Contact
			</button></a>
		</form>
	</body>
