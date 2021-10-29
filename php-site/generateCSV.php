<?php
// Database Connection
require("connection.php");

// get Users
$sql = "SELECT orderNumber, customerName, itemID, quantity, orderTotal, Date FROM saleTable";
$result = $conn->query($sql);


$saleTable = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $saleTable[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=sales.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('orderNumber', 'customerName', 'itemID', 'quantity', 'orderTotal', 'Date'));

if (count($saleTable) > 0) {
    foreach ($saleTable as $row) {
        fputcsv($output, $row);
    }
}
?>