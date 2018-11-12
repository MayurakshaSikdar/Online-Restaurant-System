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
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
	<style type="text/css">
			input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button 
			{ 
					-webkit-appearance: none;
					-moz-appearance: none;
					appearance: none;
					margin: 0; 
			}
	</style>
</style>
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
<div class="blog">
	<div class="container">
		<div class="col-md-12">
		<center>
		<div class="leave">
			<h3>Customer Registration</h3>
			<form action="register_code.php" role="form" method="post" name="cust_login" id="cust_login">
					<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
							<input type="text" id="textbox1" name="name" placeholder	="Name" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Name';}" required class="form-control">
							<br><br>
							<input type="email" id="textbox2" name="email" placeholder	="E-mail" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'E-mail';}" required class="form-control">
							<br><br>
							<input type="number" id="textbox3" name="contactNo" placeholder="Mobile No." onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Mobile No.';}" required class="form-control" maxlength="10" min="0">
							<br><br>
							<input type="password" id="textbox4" name="confirmPassword" placeholder="Password" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Password';}" required class="form-control">
							<br><br>
							<input type="password" id="textbox5" name="password" placeholder="Confirm Password" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Confirm Password';}" required class="form-control">
							<br><br>
							<input type="text" id="textbox6" name="address" placeholder="Address" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Address';}" required class="form-control">
							<br><br>
						<label class="hvr-rectangle-out">
								<input type="submit" value="Register" style="border-radius: 20px; letter-spacing: 3px">
						</label>					
				</div>
				</form>
				
				<br><br>
				<h4 class="text-danger text-center" style="font-weight: bolder;">
				<?php
				if(isset($_GET['msg']) && strcmp($_GET['msg'], "User Already Exists !")==0 or isset($_GET['msg']) && strcmp($_GET['msg'], "Password Doesn't Match !")==0){
						echo '<div class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay=".5s">'.$_GET["msg"].'</div>';
					?>
						<br><br>
						<label class="hvr-rectangle-out">
							<a href="login.php" class="btn btn-warning btn-lg wow animated fadeInLeft" data-wow-delay="1s" data-wow-duration="750ms" style="font-weight: bolder">Log In</button></a>
						</label>
				<?php }
				elseif(isset($_GET['msg'])){
					echo '<div class="animated wow fadeInUp" data-wow-delay="1000ms">'.$_GET["msg"].'</div>';
				}
				else;
				?>
				</h4>
				<script type="text/javascript">
					document.getElementById('textbox1').style.height="40px";
					document.getElementById('textbox2').style.height="40px";
					document.getElementById('textbox3').style.height="40px";
					document.getElementById('textbox4').style.height="40px";
					document.getElementById('textbox5').style.height="40px";
					document.getElementById('textbox6').style.height="40px";
					document.getElementById('textbox1').style.fontSize="18px";
					document.getElementById('textbox2').style.fontSize="18px";
					document.getElementById('textbox3').style.fontSize="18px";
					document.getElementById('textbox4').style.fontSize="18px";
					document.getElementById('textbox5').style.fontSize="18px";
					document.getElementById('textbox6').style.fontSize="18px";
				</script>				
		</div>
			</center>
		<!--content-->
<div class="single">		
</div>
<!---->
<!--//content-->
</div>
	  <div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
<!--footer-->
	<?php require("footer.php") ?>	
	<!--//footer-->
</body>
</html>

