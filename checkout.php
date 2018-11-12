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
<link rel="stylesheet" href="Admin/vendor/font-awesome/css/font-awesome.min.css"></link>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

	<style type="text/css">
		.table>tbody>tr>td, .table>tfoot>tr>td{
			vertical-align: middle;
		}
		@media screen and (max-width: 600px) {
		table#cart tbody td .form-control{
				width:20%;
				display: inline !important;
			}
		.actions .btn{
				width:36%;
				margin:1.5em 0;
			}
		.actions .btn-info{
				float:left;
			}
		.actions .btn-danger{
				float:right;
			}
		table#cart thead { display: none; }
		table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
		table#cart tbody tr td:first-child { background: #333; color: #fff; }
		table#cart tbody td:before {
				content: attr(data-th); font-weight: bold;
				display: inline-block; width: 8rem;
			}
		table#cart tfoot td{display:block; }
		table#cart tfoot td .btn{display:block;}
		}
		
		.swing {
			animation: swing ease-in-out 1s infinite alternate;
			transform-origin: center 20px;
			float:center;
/*			box-shadow: 5px 5px 10px rgba(0,0,0,0.5);*/
		}
		.swing img {
/*			border: 5px solid #f8f8f8;*/
			display: block;
		}
		.swing:after{
			content: '';
			position: absolute;  
			width: 20px; height: 20px;  
/*			border: 1px solid #999;*/
			top: -10px; left: 50%;
			z-index: 0;
			border-bottom: none;
			border-right: none;
			transform: rotate(45deg);
		}
		/* nail */
		.swing:before{
			content: '';
			position: absolute;
			width: 5px; height: 5px;
			top: -14px;left: 54%;
			z-index: 5;
/*			border-radius: 50% 50%;*/
/*			background: #000;*/
		}

		@keyframes swing {
			0% { transform: rotate(3deg); }
			100% { transform: rotate(-3deg); }
		}
	</style>

</head>
<body>
<script src='ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><body>
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
		<div class="container" id="cart_item">
		
			<!---728x90--->
		</div>
	</div>
	<?php require("footer.php") ?>		
<script>
	function view_cart_items(){
		$.ajax({
			type:"post",
			url:"view_cart_item.php",
			success:function(resp){
				$("#cart_item").html(resp);
			}
		})
	}
</script>
<script>
$(function() {
    view_cart_items();
});
</script>
<script>
	function remove_cart(cart){
		$.ajax({
			type:"post",
			url:"remove_cart.php",
			data:{cart_id:cart}
		}).done(function(resp){
			 alert(resp);
			 view_cart_items();
		})
	}
	
	function update_cart(cart,qt){
		$.ajax({
				type:"post",
				url:"update_cart_item.php",
				data:{cart_id:cart,qty:qt}
			}).done(function(resp){
				 alert(resp);
				 view_cart_items();
			})
	}
</script>
</body>
</html>