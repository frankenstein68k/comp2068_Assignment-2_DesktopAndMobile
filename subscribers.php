<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Test1</title>
</head>

<body>
<style>
td{
text-align:center;
}
</style>

<?php

//1. Write our sql command to get the list of subscribers
$sql = "SELECT * FROM comp2068_business_contacts ORDER BY contact_lname DESC";

//2. Connect to our db
$conn = mysqli_connect('webdesign4', 'db200249489', '12154', 'db200249489') or die(mysqli_error());

//3. execute our query and store the results in a variable
$result = mysqli_query($conn, $sql);

//4. create our table and header row
echo '<table border="1" class="tbl"><tr><th>Last Name</th><th>First name</th><th>Email</th><th>Primary Phone Number</th><th>Secondary Phone Number</th><th>Company</th><th>Address</th></tr>';

//5. loop through the results from our query and output them 1 at a time to the page
//<tr> creates a new row
//<td> creates a new column
while ($row = mysqli_fetch_array($result)) {
	echo '<tr><td>'. $row['contact_lname'] . '</td><td>'. $row["contact_fname"] . '</td><td>'. $row['contact_email'] . '</td><td>'. $row['contact_pri_phone'] . '</td><td>'. $row['contact_sec_phone'] . '</td><td>'. $row['contact_company'] . '</td><td>'. $row['contact_address'] . '</td></tr>';
}


//6. Closes the html table tag
echo '</table>';


//7. disconnect
mysqli_close($conn);

?>

</body>

</html>
