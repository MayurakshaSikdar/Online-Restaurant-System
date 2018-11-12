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
<link href="css/animate.min.css" rel="stylesheet" type="text/css"> 
<script src="js/wow.min.js"></script>
<script src="Admin/vendor/jquery/jquery.min.js"></script>
<script src="Admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="Admin/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
<!--<link rel="stylesheet" type="text/css" href="Admin/vendor/bootstrap/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" type="text/css" href="Admin/vendor/font-awesome/css/font-awesome.min.css">-->
<!--
<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
-->

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
			
<!--
			<div class="container-contact2">
				<div class="wrap-contact2">
					<form class="contact2-form validate-form">
						<span class="contact2-form-title">
							Confirm Details
						</span>

						<div class="wrap-input2 validate-input" data-validate="Name is required">
							<input class="input2" type="text" name="name">
							<span class="focus-input2" data-placeholder="NAME"></span>
						</div>

						<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input2" type="text" name="email">
							<span class="focus-input2" data-placeholder="EMAIL"></span>
						</div>

						<div class="wrap-input2 validate-input" data-validate = "Message is required">
							<textarea class="input2" name="message"></textarea>
							<span class="focus-input2" data-placeholder="MESSAGE"></span>
						</div>

						<div class="container-contact2-form-btn">
							<div class="wrap-contact2-form-btn">
								<div class="contact2-form-bgbtn"></div>
								<button class="contact2-form-btn">
									Proceed
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
-->
			<div class="col-md-12">
		<center>
		
		<?php
			$user = $_SESSION['user_info'];
			//$cart = $_SESSION['cart'];
			$name = $user['c_name'];
			$email = $user['email'];
			$mobile = $user['Contact_no'];
			$address = $user['Address'];
		?>
		
		<div class="leave">
			<h3>Delivery Details</h3>
			<form  role="form" method="post" name="cust_login" id="cust_login">
					<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
							<input type="text" id="textbox1" name="name" placeholder	="Name" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Name';}" required class="form-control" value="<?php echo $name?>" onChange="data_change()">
							<br><br>
							<input type="email" id="textbox2" name="Email" placeholder = "E-mail" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'E-mail';}" required class="form-control" value="<?php echo $email;?>" disabled>
							<br><br>
							<input type="number" id="textbox3" name="contactNo" placeholder="Mobile No." onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Mobile No.';}" required class="form-control" maxlength="10" min="0" value="<?php echo $mobile;?>" onChange="data_change()">
							<br><br>
							<input type="text" id="textbox4" name="address" placeholder="Address" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Address';}" required class="form-control" value="<?php echo $address?>" onChange="data_change()">
							<br><br>
								<select class="form-control" id="area" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'" name="area">
									<option>Select Area</option>
								<?php
										$query = mysqli_query($con, "SELECT * FROM `area_table` ORDER BY `area_name`");
										while($rec = mysqli_fetch_assoc($query)){
								?>
										  <option value="<?php echo $rec['area_id']?>"><?php echo $rec['area_name']?></option>
								<?php } ?>
								</select>
							<br><br>
								<div id="sub_area_view">
								</div>
							<br><br>
						<label class="hvr-rectangle-out">
								<input type="submit" value="Proceed >>" style="border-radius: 20px; letter-spacing: 3px" name="ok">
<!--								<button type="button" value="Proceed >>" style="border-radius: 20px; letter-spacing: 3px" name="ok" id="proceed" class="btn btn-success btn-lg"><p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">Proceed >></p></button>-->
						</label>					
				</div>
				</form>
				<br><br>
<!--
				<h4 class="text-danger text-center" style="font-weight: bolder;">
				<?php
//				if(isset($_GET['msg']) && strcmp($_GET['msg'], "User Already Exists !")==0 or isset($_GET['msg']) && strcmp($_GET['msg'], "Password Doesn't Match !")==0){
//						echo '<div class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay=".5s">'.$_GET["msg"].'</div>';
					?>
						<br><br>
						<label class="hvr-rectangle-out">
							<a href="login.php" class="btn btn-warning btn-lg wow animated fadeInLeft" data-wow-delay="1s" data-wow-duration="750ms" style="font-weight: bolder">Log In</button></a>
						</label>
				<?php //}
//				elseif(isset($_GET['msg'])){
//					echo '<div class="animated wow fadeInUp" data-wow-delay="1000ms">'.$_GET["msg"].'</div>';
//				}
//				else;
				?>
				</h4>
-->
				<script type="text/javascript">
					document.getElementById('textbox1').style.height="40px";
					document.getElementById('textbox2').style.height="40px";
					document.getElementById('textbox3').style.height="40px";
					document.getElementById('textbox4').style.height="40px";
					document.getElementById('textbox1').style.fontSize="18px";
					document.getElementById('textbox2').style.fontSize="18px";
					document.getElementById('textbox3').style.fontSize="18px";
					document.getElementById('textbox4').style.fontSize="18px";
					document.getElementById('textbox1').style.color="black";
					document.getElementById('textbox1').style.color="black";
					document.getElementById('textbox2').style.color="black";
					document.getElementById('textbox3').style.color="black";
					document.getElementById('textbox4').style.color="black";
					$('#area').on('change', function() {
						var area_id = this.value;
						//alert(area_id);
						$.ajax({
							type:"post",
							url:"sub_area_view.php",
							data:{area:area_id},
							success:function(resp){
								$("#sub_area_view").html(resp);
							}
						});
					});
				</script>
		</div>
			</center>
		<!--content-->
<div class="single">		
</div>
<!---->
<!--//content-->
</div>

			
		</div>
	</div>
	
	
	<?php require("footer.php") ?>
<script type="text/javascript">
	
	function data_change()
	{
		var id = parseInt(<?php echo $user['id']?>);
		var name = $("#textbox1").val();
		var mobile = $("#textbox3").val();
		var address = $("#textbox4").val();
		if(confirm('Save Changes to Profile to continue.')){
			$.ajax({
				type: "post",
				url: "update_customer.php",
				data: {id:id, name:name, mobile,mobile, address:address},
				}).done(function(resp){
					alert(resp);
					window.location.href="checkout_confirmDetails.php";
				})
		}
		else{
			window.location.href="checkout_confirmDetails.php";
		}
	}
	
	
//	$("#proceed").on('click', function(){
//		var name = $("#textbox1").val();
//		var mobile = $("#textbox3").val();
//		var address = $("#textbox4").val();
//		var sub_area = $("sub_area").val();
//		var area = $("area").val();
//		alert(area);
//		var flag = 0;
////		var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
////		var is_email=re.test(input.val());
////		if(is_email){input.removeClass("invalid").addClass("valid");}
////		else{input.removeClass("valid").addClass("invalid");}
//		if(name){$("#textbox1").removeClass("invalid").addClass("valid");}
//		else{$("#textbox1").removeClass("valid").addClass("invalid");}
//		var filter = ([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})
//		if(filter.test(mobile)){$("#textbox3").removeClass("invalid").addClass("valid");}
//		else{$("#textbox3").removeClass("valid").addClass("invalid");}
//		});
	
</script>

<?php
		if(isset($_POST['ok']))
		{
			$id = $user['id'];
			$name = $_POST['name'];
			$email = $user['email'];
			$contactNo = $_POST['contactNo'];
			$address = $_POST['address'];
			$area_id = $_POST['area'];
			$sub_id = $_POST['sub_area'];
//			if(strcmp($name, $user['Address']) != 0)
//			{
//				$rec = mysqli_query($con, "UPDATE `customer_table` SET `address` = '$address' WHERE id='$id'") or die(mysqli_error($con));
//			}
			$_SESSION['orderDetails'] = array($id,$name,$email,$contactNo,$address,$area_id,$sub_id);
			echo '<script type="text/javascript">window.location = "checkout_total.php"</script>';
		}
	?>
</body>

</html>