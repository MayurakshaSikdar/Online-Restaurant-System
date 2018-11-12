<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Cookery</title>
	<link rel="icon" href="images/favicon5.ico" style="width: 32px; height: 32px">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!---->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	<link href="css/styles.css" rel="stylesheet">
<!--	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
	<!-- animation-effect -->
	<!--
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
	<link href="css/animate.min.css" rel="stylesheet"> 
	<script src="js/wow.min.js"></script>
	<script src="Admin/vendor/jquery/jquery.min.js"></script>
	<script src="Admin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<link href="Admin/vendor/bootstrap/css/bootstrap.min.css">
	<script>
	 new WOW().init();
	</script>
	<!-- //animation-effect -->

	<script src='ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<!--<script src="m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>-->
	<script>
	(function(){
		if(typeof _bsa !== 'undefined' && _bsa) {
			// format, zoneKey, segment:value, options
			_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
		}
	})();
	</script>
	
	<script>
	(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
		// format, zoneKey, segment:value, options
		_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
	}
	})();
	</script>
	
	<script>
	(function(){
		if(typeof _bsa !== 'undefined' && _bsa) {
			// format, zoneKey, segment:value, options
			_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
		}
	})();
	</script><script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-30027142-1', 'w3layouts.com');
	  ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="header head">
		<div class="container">
			<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h1><a href="index.php"><span>C</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">kery</a></h1>
			</div>
			<?php require("header_menu.php") ?>
		<div class="clearfix"></div>
		</div>
		<!-- start search-->	

	</div>
<!--content-->
<!---728x90--->
	<div class="menu">
		<div class="container">
		<!---728x90--->
				
		<?php
		if(!empty($_SESSION['user_info'])){
//				$sub_tot = array();
				$cart_src=mysqli_query($con,"SELECT o.*, i.* FROM order_table o INNER JOIN items_table i ON o.items_id=i.items_id WHERE o.id=".$_SESSION['user_info']['id']."") or die(mysqli_error($con));		
				if(mysqli_num_rows($cart_src)>0){				
								
			?>
			<table id="cart" class="table table-hover table-condensed table-striped" style="font-size: 1.5em">
    				<thead>
						<tr class="bg-warning">
							<th style="width:40%">Product</th>
							<th style="width:25%">Name</th>
							<th style="width:15%">Price</th>
							<th style="width:12%">Quantity</th>
							<th style="width:18%">Total</th>
						</tr>
					</thead>
					<tbody>
					<?php
					while($cart_rec=mysqli_fetch_assoc($cart_src))
					{
//						array_push($sub_tot, ($cart_rec['price']*$cart_rec['qty']));
					?>					
						<tr style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size: .9em">
							<td data-th="Product" style="vertical-align: middle">
								<div class="row">
									<div class="col-sm-4 hidden-xs">
<!--									<img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>-->
									<img src="<?php echo $cart_rec['fpath'] ?>" alt="<?php echo $cart_rec['name'] ?>" title="<?php echo $cart_rec['name'] ?>" class="img-responsive">
									</div>
									<div class="col-sm-10">
										<h4 class="nomargin"></h4>
									</div>
								</div>
							</td>
							<td data-th="Name" style="vertical-align: middle"><?php echo $cart_rec['name']?></td>
							<td data-th="Price" style="vertical-align: middle"><?php echo $cart_rec['price']?></td>
							<td data-th="Quantity" style="vertical-align: middle">
<!--								<input type="number" class="form-control text-center" value="<?php //echo $cart_rec['qty']?>" name="qty" onBlur="update_cart(<?php// echo $cart_rec['cart_id'] ?>,this.value)">-->
								<?php echo $cart_rec['quantity']?>
							</td>
							<td data-th="Total" style="vertical-align: middle"><?php echo sprintf("%.2f",$cart_rec['price']*$cart_rec['quantity']);?></td>
<!--
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm" title="Remove from Cart" onClick="remove_cart(<?php //echo $cart_rec['cart_id'] ?>)"><i class="fa fa-trash-o"></i></button>								
							</td>
-->							
						</tr>
						<?php }?>
					</tbody>
					
					<tfoot>
<!--					
						<tr class="visible-xs">
							<td class="text-center"><strong>Total &nbsp;&nbsp;<?php //echo array_sum($sub_tot);?></strong></td>
						</tr>
-->
						<tr>
							<td colspan="5"></td>
						</tr>
						<tr>
<!--
						<style type="text/css">
							#checkout{
								text-align: center;
								transition: all 0.5s;
							}
							#checkout span{
								display: inline-block;
								position: relative;
								transition: 0.5s;
							}
							#checkout span:after{
								content: '\00bb';
								position: absolute;
								opacity: 0;
								right: -20px;
								transition: 0.5s;
							}
							#checkout:hover span{
								padding-right: 25px;
							}
							#checkout:hover span:after{
								opacity: 1;
								right: 0;
							}
						</style>
-->
							<td colspan="2"><a href="menu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i><span style="font-size: 20px; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'"> &#8592; &nbsp;Continue Shopping</span></a></td>
							<td colspan="3" class="hidden-xs"></td>
<!--							<td class="hidden-xs text-center"><strong style="d">Total&nbsp;&nbsp; <i class="fa fa-inr" style="font-size:20px"></i><?php //echo array_sum($sub_tot);?></strong></td>-->
<!--							<td><a href="checkout_confirmDetails.php" id="checkout" class="btn btn-success btn-block"><span style="font-size: 15px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">Checkout </span> <i class="fa fa-angle-right"></i></a></td>-->
							
						</tr>
					</tfoot>
				</table>
			<?php	}
				else{?>
						<center>
							<img src="images/emoticon.jpg" class="animated flipInY fadeInDown">
							<br>
							<br>
							<br>
							<h1 class="text-center text-warning" style="font-family: ruthie,'euphoria-script', arizonia, 'alex-brush', italianno, Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">You have no previous order.</h1>
							<br>
							<br>
							<br>
						</center>
				<?php }
		}
			else{
				echo '<script type="text/javascript">window.location.href = "login.php"</script>';
			}
			?>

		</div>
	</div>
	
	<!--footer-->
	<?php require("footer.php") ?>		
	<!--//footer-->
</body>
</html>