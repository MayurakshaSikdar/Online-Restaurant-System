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


</head>
<body>
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
	
	 <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
			  <p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>

		</div>
	  </div>
	
	
	<div class="menu">
		<div class="container">
			<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Menu</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms" style="margin-top: 20px;">
				<?php
				$src=mysqli_query($con,"SELECT * FROM `type_table`")or die(mysqli_error($con));
				if(mysqli_num_rows($src)>0){
					$arr=array();
					while($rec=mysqli_fetch_assoc($src)){
						array_push($arr,$rec['type_id']);
						if(strcmp($rec['category'], "Main Course") == 0)
						{
						?><h3 style="float: left; margin-right: 10px;"><a href="javascript:void(0)" onClick="get_items(<?php echo $rec['type_id'] ?>)"><span style="margin-right: 10px;"><?php echo $rec['category']."[".$rec['type_name']."]" ?></span></a></h3><?php
						}
						else{
						?>
							<h3 style="float: left; margin-right: 10px;"><a href="javascript:void(0)" onClick="get_items(<?php echo $rec['type_id'] ?>)"><span style="margin-right: 10px;"><?php echo $rec['category'];?></span></a></h3>
						<?php 
						}
					}
				}else{
					?><h4 class="text-center text-danger">No Category Found</h4><?php
				}
				?>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!---728x90--->
			<div id="items" class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<!--<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>						
					</div>
				</div>
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me1.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>						
					</div>
				</div>
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me2.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>	
					</div>
				</div>-->
				<div class="clearfix"> </div>				
			</div>
			<!---728x90--->
<!--
			<div class="menu-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me4.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me5.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>		
					</div>
				</div>
				<div class="clearfix"> </div>				
			</div>
-->
		</div>
	</div>
<!--footer-->
	<?php require("footer.php") ?>		
	<!--//footer-->
<script>
	$(document).ready(function(){
		get_items(<?php echo $arr[0]; ?>);
	});
</script>
<script>
	function get_items(type){
		$.ajax({
			type:"post",
			url:"get_items.php",
			data:{cat:type},
			success:function(resp){
				$("#items").html(resp);
			}
		});
	}
</script>
<script>
	function add_to_cart(cart_id){
		var items_id=$("#items_id"+cart_id).val();
		var qty=$("#qty"+cart_id).val();
		if(qty>=1){
			$.ajax({
				type:"post",
				url:"add_to_cart.php",
				data:{items_id:items_id,qty:qty}
			}).done(function(resp){
				 alert(resp);
			})
		}
		else{
			alert('Quantity cannot be smaller than 1');
		}
	}
</script>
</body>
</html>