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
  <a href="itemsMenu.php" class="icon-a"><i class="fa fa-beer"></i> &nbsp;Items Menu</a>
  <a href="salesMenu.php" class="icon-a"><i class="fa fa-address-book"></i> &nbsp;Sales Menu</a>
  <a href="reportsMenu.php" class="icon-a"><i class="fa fa-area-chart"></i> &nbsp;Reports Menu </a>


</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="navback"  >&#9776; Dashboard</span>
</div>
	
	
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3"> </div>
	<div class="col-div-3"> </div>
	<div class="col-div-3"> </div>
	<div class="col-div-3"> </div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
		  <p>Functions To Be Added</p>
        </div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			
		<p>hello</p>		
  </div>
		</div>
	</div>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

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
