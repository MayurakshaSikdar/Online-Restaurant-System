<link href="Admin/vendor/font-awesome/css/font-awesome.min.css">
<script src="Admin/vendor/bootstrap/css/bootstrap.min.css"></script>
<script src="Admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="Admin/vendor/jquery/jquery.min.js"></script>
<?php
require('config.php');
if(!empty($_SESSION['user_info'])){ ?>
	<div class="nav-icon">
	<h3 style="color: #FFFFFF; float: left; margin-top: -5px; margin-right: 15px;">Hi, <?php echo $_SESSION['user_info']['c_name'] ?></h3>		
	<a href="#" class="navicon"></a>
		<div class="toggle">
			<ul class="toggle-menu">
				<li><a  href="index.php">Home</a></li>
				<li><a  href="menu.php">Menu</a></li>
				<li><a  href="checkout.php">Cart Item</a></li>
				<li><a  href="view_order.php">View Order</a></li>
				<li><a  href="log_out.php">Logout</a></li>
			</ul>
		</div>
	<script>
	$('.navicon').on('click', function (e) {
	  e.preventDefault();
	  $(this).toggleClass('navicon--active');
	  $('.toggle').toggleClass('toggle--active');
	});
	</script>
</div>
<?php
}else{?>
	<div class="nav-icon">
	<h3 style="color: #FFFFFF; float: left; margin-top: -5px; margin-right: 15px;">Hi, Guest</h3>		
	<a href="#" class="navicon"></a>
		<div class="toggle">
			<ul class="toggle-menu">
				<li><a  href="index.php">Home</a></li>
				<li><a  href="menu.php">Menu</a></li>
				<li><a  href="login.php">Cart Item</a></li>
				<li><a  href="login.php">View Order</a></li>
				<li><a  href="login.php">Log In</a></li>
			</ul>
		</div>
	<script>
	$('.navicon').on('click', function (e) {
	  e.preventDefault();
	  $(this).toggleClass('navicon--active');
	  $('.toggle').toggleClass('toggle--active');
	});
	</script>
</div>
<?php
}
?>