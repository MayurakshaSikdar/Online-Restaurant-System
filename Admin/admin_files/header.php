<html>
 <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript">
  <link href="../vendor/jquery/jquery.min.js" type="text/javascript">
</html>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Admin Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Order">
          <a class="nav-link" href="order.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Order</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link" href="category.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Items">
          <a class="nav-link" href="items.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Items</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Area">
          <a class="nav-link" href="area.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Area</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Delivery Loctions">
          <a class="nav-link" href="location.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Deliver Locations</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <?php
		  require("config.php");
		  require("check_session.php");
		  $rec = $_SESSION['user'];
		  $first_name = explode(" ", $rec['name']);
		?>
			<li class="nav-item">
          		<a href="index.php" class="nav-link text-center">
			  <i class="fa fa-fw fa-user"></i>Welcome <?php echo $first_name[0];?></a>
        	</li>
        
        <li class="nav-item">
          <a href="log_out.php" class="nav-link text-center" name="user"><i class="fa fa-fw fa-sign-out" id="logout"></i>Logout</a>
        </li>
      </ul>
    </div>
</nav>