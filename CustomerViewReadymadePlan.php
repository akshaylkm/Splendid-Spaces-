<?php
include('CustomerPageHeader.php');
?>
<link href="Product/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="Product/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="Product/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="Product/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="Product/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="Product/js/menu_jquery.js"></script>
<script src="Product/js/simpleCart.min.js"> </script>
<link href="Product/css/form.css" rel="stylesheet" type="text/css" media="all" />
<form method="post">
<div class="col-md-9 product-model-sec">
				 <?php 
					include('dbconnect.php');
	session_start();
					$res=mysql_query("SELECT * FROM readymadeplan");
	  				while($data=mysql_fetch_assoc($res))
					{
						$a = $data['rid'];
						$_SESSION['aid'] = $a;
						$b=$data['planname'];
						$c=$data['plotsize'];
						$d=$data['dimension'];
						$e = $data['floor'];
						$f=$data['bedroom'];
						$g = $data['plan'];
						echo "
					 <a href='Readymade/$g'><div class='product-grid love-grid'>
						<div class='more-product'><span> </span></div>						
						<div class='product-img b-link-stripe b-animate-go  thickbox'>
							<img src='Readymade/$g' class='img-responsive' alt=''style ='height='600px' width='337px''/>
							<div class='b-wrapper'>
							<h4 class='b-animate b-from-left  b-delay03'>							
							
							</h4>
							</div>
						</div></a>						
						<div class='product-info simpleCart_shelfItem'>
							<div class='product-info-cust prt_name'>
								<h4>$b</h4>
								<p>Plot Size : $c</p>
								<p>Dimension : $d</p>
								<p>Floor : $e</p>
								<p>Bedrooom : $f</p>
								<form method='post'>
								<input type='hidden' value='$a' name='pid'>
								<input type='submit' name='b1' class='item_add items' value='Order Now'>
								</form>
							</div>													
							<div class='clearfix'> </div>
						</div>
					</div>	";
					}
	?>
					
					 
				</form>
				<?php
	include('dbconnect.php');
	
	if(isset($_REQUEST['b1']))
	{
		$id = $_SESSION['cid'];
		$c = $_REQUEST['pid'];
		$qry= "insert into ready_cust_order values('','$c','$id','Booked')";
		mysql_query($qry);
		
		echo "<script type = \"text/javascript\">
					window.location = (\"CustomerViewPaymentAlert.php\")
				</script>";
	}
	?>
					
					
					
					</div>
			</div>
<?php
include('CommonPageFooter.php');
?>