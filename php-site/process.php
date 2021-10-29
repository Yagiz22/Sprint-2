<!doctype html>
<html>
<body>
	<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 

	 $Name = $_POST['Name'];
	 $Price = $_POST['Price'];
	 $Stock = $_POST['Stock'];
	 $sql = "INSERT INTO itemTable (Name, Price, Stock, Date) VALUES ('$Name','$Price','$Stock', '$Date')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
	
if(isset($_POST['edit']))	
{
    $ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$Price = $_POST['Price'];
	$Stock = $_POST['Stock'];
    $query = "UPDATE itemTable SET Name='$Name', Price='$Price', Stock='$Stock' WHERE ID='$ID' ";
    $query_run = mysqli_query($conn, $query);
	if (mysqli_query($conn, $query)) {
		echo "Record updated created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
</body>
</html>