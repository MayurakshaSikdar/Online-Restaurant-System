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

<link href="css/animate.min.css" rel="stylesheet" type="text/css"> 
<script src="js/wow.min.js"></script>
<script src="Admin/vendor/jquery/jquery.min.js"></script>
<script src="Admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="Admin/vendor/bootstrap/css/bootstrap.min.css" type="text/css">


<!--
<style type="text/css">
	input.invalid, textarea.invalid{
		border: 2px solid red;
	}

	input.valid, textarea.valid{
		border: 2px solid green;
	}
	
	.error{
		display: none;
		margin-left: 10px;
	}		

	.error_show{
		color: red;
		margin-left: 10px;
	}
</style>
-->


<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
	<script src='ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<div class="header head">
		<div class="container">
			<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h1><a href="index.php"><span>C</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">kery</a></h1>
			</div>
			<?php require("header_menu.php"); ?>
			<div class="clearfix"></div>
		</div>
	</div>
<!--content-->
<!---728x90--->
	<div class="menu">
		<div class="container">
		<!---728x90--->
					<div class="menu-top">
							<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
								<h3>Contact</h3>
								<label><i class="glyphicon glyphicon-menu-up"></i></label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<!---728x90--->
			
						<div class="contact-top">
<!--
						<div class="col-md-5 contact-map">
						<h5>Google Map</h5>
						<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>

						</div>
						<div class="address">
									  <h4>Address</h4>
									  <p> Richard McClintock</p>
									  <p>Letraset sheets </p>
									  <p>ph : +123 859 6050</p>
									  <p>Email : <a href="mailto:example@gmail.com">example@gmail.com</a></p>
								 </div>
						</div>
-->
					<?php
						$user = $_SESSION['user_info'];
						$id = $user['id'];
						$query = mysqli_query($con,"SELECT * FROM `customer_table` WHERE `id`='$id'") or die(mysqli_error($con));
						$rec = mysqli_fetch_assoc($query);
					?>
						<div class="col-md-12 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms" id="contact">
						<form style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'" method="post" id="form">
							<div class="grid-contact">
								<div class="col-md-6 contact-grid">
									<p class="your-para">Name </p>
										<input type="text" value="<?php echo $rec['c_name']?>" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" placeholder="Name">
									</div>
								<div class="col-md-6 contact-grid">
								<p class="your-para">Phone number</p>	
									<input type="text" value="<?php echo $rec['Contact_no']?>" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" placeholder="Mobile Number">
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="grid-contact">
								<div class="col-md-6 contact-grid">
									<p class="your-para">Email</p>
									<input type="text" value="<?php echo $rec['email']?>" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" placeholder="Email">
								</div>
								<div class="col-md-6 contact-grid">
									<p class="your-para">Address</p>
									<input type="text" value="<?php echo $rec['Address']?>" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" placeholder="Address">
								</div>
								<div class="clearfix"> </div>
							</div>
							<p class="your-para msg-para">MESSAGE</p>
							<textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" placeholder="Enter Message Here...."></textarea>
								<div class="send">
									<input type="submit" value="Send " id="submit">
								</div>
						</form>
						</div>	

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
	
	
	<?php require("footer.php") ?>
	<script type="text/javascript">
		$("#form").submit(function(e){
        	e.preventDefault();
    	});
		$("#submit").on('click', function(){
			$.ajax({
				url: "contact_submit.php",
				type: "post",
				success: function(resp){
					$("#form").hide();
					$("#contact").html(resp);
				}
			})
		})
	</script>
</body>

</html>