<html>
	<head>
		<title>Add New Administrator</title>
	</head>

	<!--Beginning of the form to take the new Administrator's details-->
	<h2>If you do not have access level 3 you will not be able to save any changes on this form</h2>
	<body>
		<form method="post" action="insert_admin_users.php">
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
				<label for="username">Username: *</label>
				<input name="username">
			</div>
			<div>
				<label for="password">Password: *</label>
				<input name="password">
			</div>
			<div>
				<label for="access_level">Access Level: *</label>
				<input name="access_level">
			</div>

			<input type="submit" value="Create new admininstrator" />
			<a href="administrate_administrators.php">
			<button>
				Cancel New Administrator
			</button></a>
		</form>
	</body>
