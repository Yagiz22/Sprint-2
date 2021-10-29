<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">


</head>

<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>PHP</span>-PeoplesHealth Pharma</p>
   <a href="index.html" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;Dashboard</a>
  <a href="itemsMenu.php"class="icon-a"><i class="fa fa-beer"></i> &nbsp;Items Menu</a>
  <a href="salesMenu.php"class="icon-a"><i class="fa fa-address-book"></i> &nbsp;Sales Menu</a>
  <a href="#"class="icon-a"><i class="fa fa-area-chart"></i> &nbsp;Reports Menu </a>


</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Sales Menu</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="navback"  >&#9776; Items Menu</span>
</div>
	
	
	<div class="clearfix"></div>
</div>
	<div class="clearfix"></div>	
	<div class="col-div-3"> </div>
	<div class="col-div-3"> </div>
	<div class="col-div-3"> </div>
	<div class="col-div-3"> </div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
	  <div class="box-8">
		<div class="content-box">
			<p>Current Sales </p>
			<br>
<table>
			<tr>
					<th class>Order Number</th>
					<th>Customer Name</th>
					<th>Item ID</th>
				    <th>Quantity</th>
					<th>Order Total</th>
				    <th>Order Date</th>
				    <th>Stock Status</th>

				</tr>
	
<?php
	
include_once 'connection.php';


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT orderNumber, customerName, itemID, quantity, orderTotal, Date FROM saleTable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
// output data of each row

while($row = $result->fetch_assoc())  {
echo
	"</td><td>". $row["orderNumber"].
	"</td><td>". $row["customerName"]. 
	 "</td><td>". $row["itemID"]. 
	 "</td><td>". $row["quantity"]. 
	 "</td><td>". $row["orderTotal"]. 
	 "</td><td>". $row["Date"].	
	 "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
	
$conn->close();	
	
?> 							
</table>
			
		
			<br>
<a type="submit" href="generateCSV.php" class="button"><i class="dwn"></i> Export</a>
				</div>				
      </div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			
		<form action="processSale.php" method="post">
			
			<p>Add A New Sale</p>	
			
		<div class="input-fields">
      <input type="text" name="customerName" class="input" placeholder="Customer Name">
      <input type="text" name ="itemID" class="input" placeholder="Item ID">
      <input type="text" name ="quantity" class="input" placeholder="Quanity">
      <input type="text"  name ="orderTotal" class="input" placeholder="Order Total">
	  <input type="date"  name ="Date" class="input">
    </div>
			  
       <input type="submit" name="submit" class="button" value="Add Sale">	

			</form>	
			  
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(".nav").click(function(){
    $("#mySidenav").css('width','90px');
    $("#main").css('margin-left','90px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".navback").css('display','block');
  });

$(".navback").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".navback").css('display','none');
 });
</script>
</body>


</html>
