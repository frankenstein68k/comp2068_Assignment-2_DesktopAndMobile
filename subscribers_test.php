<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php

//1. Write our sql command to get the list of subscribers
$sql = "SELECT * FROM subscribers";

//echo $sql;

//2. Connect to our db
$conn = mysqli_connect('webdesign4', 'db200249489', '12154', 'db200249489') or die(mysqli_error());

//3. execute our query and store the results in a variable
$result = mysqli_query($conn, $sql);

//4. loop through the results from our query and output them 1 at a time to the page
while ($row = mysqli_fetch_array($result)) {
	echo $row['email'] . '<br />';
}

//5. disconnect
mysqli_close($conn);

?>

</body>

</html>
