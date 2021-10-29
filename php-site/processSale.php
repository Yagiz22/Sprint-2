<!doctype html>
<html>
<body>
	<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 

	 $customerName = $_POST['customerName'];
	 $itemID = $_POST['itemID'];
	 $quantity = $_POST['quantity'];
	 $orderTotal = $_POST['orderTotal'];
	 $Date = $_POST['Date'];
	 $sql = "INSERT INTO saleTable (customerName, itemID, quantity, orderTotal, Date)
	 VALUES ('$customerName','$itemID','$quantity','$orderTotal', '$Date')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
</body>
</html>