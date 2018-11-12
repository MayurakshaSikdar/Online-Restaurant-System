<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Cookery</title>
<link rel="icon" href="images/favicon5.ico" style="width: 32px; height: 32px">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script src='../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>

<!--<script src="../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>-->
<!--
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
-->
<!--
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
-->
<!--
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
-->
<!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
-->
<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index-2.html"><span>C</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">kery</a></h1>
		</div>
		<?php require('header_menu.php');?>
		<div class="clearfix"></div>
	</div>
	<!-- start search-->	
		
</div>
<!--content-->
<!---728x90--->
<!--<script src='../../../../../publisher.eboundservices.com/dynamicAds/dynamicScript.js'></script>-->
<!--
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
var allowedNumberOfEboundDynamicAdds = 4;
var sizesEboundDynamicAdsDesktop = ['728x90'];
var sizesEboundDynamicAdsTablet = ['728x90'];
var sizesEboundDynamicAdsMobile = ['320x100'];
eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');

if(typeof user_tag_config == 'undefined'){
	var user_tag_config = {};
}
user_tag_config['ebound_header_tag'] = {};
user_tag_config['ebound_header_tag']['desktop'] = {};
user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
user_tag_config['ebound_header_tag']['tablet'] = {};
user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
user_tag_config['ebound_header_tag']['mobile'] = {};
user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
</script></div>
-->

<div class="content">
	<div class="events">
		<div class="container">
			<?php 
			$i = 1;
			$items_id=$_GET['id'];
			$rec = mysqli_query($con,"SELECT i.*, t.* FROM items_table i INNER JOIN type_table t ON i.type_id=t.type_id WHERE i.items_id='$items_id'") or die(mysqli_error($con));
			$src=mysqli_fetch_assoc($rec);
			?>
			<div class="events-top">
				<div class="col-md-4 events-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3><?php echo $src['category']?></h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
<!--
				<div class="col-md-8 events-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.</p>
				</div>
-->
				<div class="clearfix"> </div>
			</div>
			<div class="events-bottom">
				<div class="col-md-5 events-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<a href="javascript:void(0)"><img src="<?php echo $src['fpath'] ?>" alt="" class="img-responsive"></a>
				</div>
				<div class="events-bottom2 animated wow fadeInLeft col-md-7" data-wow-duration="1000ms" data-wow-delay="500ms">
				
				<form name="frm" method="post">
					<h3><?php echo $src['name']?></h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>
					<br>
					<span><h4 class="text-warning" style="display: inline; font-size: 25px; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'">Spicy :</h4> <h4 style="display: inline; font-size: 25px; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'"><?php echo $src['spicy']?></h4></span>
					<br><br>
					<span><h4 class="text-warning" style="display: inline; font-size: 25px; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'">Price :</h4> <h4 style="display: inline; font-size: 25px; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'"><?php echo $src['price']?></h4></span>
					<br><br>
					<span style="color: #FFFFFF"><b class="text-success h4">Qantity&nbsp;&nbsp;</b></span> <input type="text" name="qty<?php echo $i ?>" id="qty" value="1">
					<a href="javascript:void(0)" 
					onClick='add_to_cart("<?php echo $i ?>")'>
<!--					&nbsp;-->
					<img src="images/add_to_cart2.png" style="width: 150px;" id="addToCart"></a>
					</p>
				</form>
					<!--div class="read-more">						
						<a class="link link-yaku" href="single.html">
							<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>					
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!---728x90--->
<!--<script src='../../../../../publisher.eboundservices.com/dynamicAds/dynamicScript.js'></script>-->
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
var allowedNumberOfEboundDynamicAdds = 4;
var sizesEboundDynamicAdsDesktop = ['728x90'];
var sizesEboundDynamicAdsTablet = ['728x90'];
var sizesEboundDynamicAdsMobile = ['320x100'];
eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');

if(typeof user_tag_config == 'undefined'){
	var user_tag_config = {};
}
user_tag_config['ebound_header_tag'] = {};
user_tag_config['ebound_header_tag']['desktop'] = {};
user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
user_tag_config['ebound_header_tag']['tablet'] = {};
user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
user_tag_config['ebound_header_tag']['mobile'] = {};
user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
</script></div>
<!--
			<div class="events-bottom">
				<div class="col-md-7 events-bottom2 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>At vero eos et</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
					</p>
					<div class="read-more">						
						<a class="link link-yaku" href="single.html">
							<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>					
						</a>
					</div>
				</div>
				<div class="col-md-5 events-bottom1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<a href="single.html"><img src="images/ev1.jpg" alt="" class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
-->
<!--
			<div class="events-bottom">
				<div class="col-md-5 events-bottom1 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<a href="single.html"><img src="images/ev2.jpg" alt="" class="img-responsive"></a>
				</div>
				<div class="col-md-7 events-bottom2 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>At vero eos et</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
					</p>
					<div class="read-more">						
						<a class="link link-yaku" href="single.html">
							<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>					
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
-->
			<!---728x90--->
<!--<script src='../../../../../publisher.eboundservices.com/dynamicAds/dynamicScript.js'></script>-->
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
var allowedNumberOfEboundDynamicAdds = 4;
var sizesEboundDynamicAdsDesktop = ['728x90'];
var sizesEboundDynamicAdsTablet = ['728x90'];
var sizesEboundDynamicAdsMobile = ['320x100'];
eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');

	if(typeof user_tag_config == 'undefined'){
		var user_tag_config = {};
	}
	user_tag_config['ebound_header_tag'] = {};
	user_tag_config['ebound_header_tag']['desktop'] = {};
	user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
	user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
	user_tag_config['ebound_header_tag']['tablet'] = {};
	user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
	user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
user_tag_config['ebound_header_tag']['mobile'] = {};
user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
</script></div>
<!--
			<div class="events-bottom">
				<div class="col-md-7 events-bottom2 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>At vero eos et</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
					</p>
					<div class="read-more">						
						<a class="link link-yaku" href="single.html">
							<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>					
						</a>
					</div>
				</div>
				<div class="col-md-5 events-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<a href="single.html"><img src="images/ev3.jpg" alt="" class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
-->
				</div>
			</div>
		</div>
	</div>
</div>
<!--footer-->
			
	<!--//footer-->

<?php require('footer.php');?>
</body>
<script>
	function add_to_cart(cart_id){
		var items_id = <?php echo $_GET['id']?>;
		//var qty=$("#qty"+cart_id).val();
		var qty = document.getElementById("qty").value;
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
</html>