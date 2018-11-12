<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Indian Restaurant</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require("header.php");?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Order Page</li>
      </ol>
      <div class="row">
        <div class="col-12 table-responsive">
          <h1>Order</h1>
          
          
          <script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("order_table");
		  switching = true;
		  // Set the sorting direction to ascending:
		  dir = "asc"; 
		  /* Make a loop that will continue until
		  no switching has been done: */
		  while (switching) {
			// Start by saying: no switching is done:
			switching = false;
			rows = table.rows;
			/* Loop through all table rows (except the
			first, which contains table headers): */
			for (i = 1; i < (rows.length - 1); i++) {
			  // Start by saying there should be no switching:
			  shouldSwitch = false;
			  /* Get the two elements you want to compare,
			  one from current row and one from the next: */
			  x = rows[i].getElementsByTagName("TD")[n];
			  y = rows[i + 1].getElementsByTagName("TD")[n];
			  /* Check if the two rows should switch place,
			  based on the direction, asc or desc: */
			  if (dir == "asc") {
				if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
				  // If so, mark as a switch and break the loop:
				  shouldSwitch = true;
				  break;
				}
			  } else if (dir == "desc") {
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
				  // If so, mark as a switch and break the loop:
				  shouldSwitch = true;
				  break;
				}
			  }
			}
			if (shouldSwitch) {
			  /* If a switch has been marked, make the switch
			  and mark that a switch has been done: */
			  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			  switching = true;
			  // Each time a switch is done, increase this count by 1:
			  switchcount ++; 
			} else {
			  /* If no switching has been done AND the direction is "asc",
			  set the direction to "desc" and run the while loop again. */
			  if (switchcount == 0 && dir == "asc") {
				dir = "desc";
				switching = true;
			  }
			}
		  }
		}
	</script>
         
         
          <?php 
				$src = "SELECT * FROM order_table";
				$rs = mysqli_query($con, $src) or die(mysqli_error($con));
				if(mysqli_num_rows($rs) > 0)
				{?>
					<table id="order_table" class="table table-bordered table-hover text-center">
						<thead>
							<tr>
								<th>Order ID <i class="fa fa-sort float-right" onClick="sortTable(0)"></i></th>
								<th>Quantity <i class="fa fa-sort float-right" onClick="sortTable(1)"></i></th>
								<th>Item ID <i class="fa fa-sort float-right" onClick="sortTable(2)"></i></th>
								<th>ID <i class="fa fa-sort float-right" onClick="sortTable(3)"></i></th>
								<th>Sub ID <i class="fa fa-sort float-right" onClick="sortTable(4)"></i></th>
								<th>Contact No. <i class="fa fa-sort float-right" onClick="sortTable(5)"></i></th>
								<th>Delivery Address <i class="fa fa-sort float-right" onClick="sortTable(6)"></i></th>
								<th>Order Date <i class="fa fa-sort float-right" onClick="sortTable(7)"></i></th>
								<!--<th>Status <i class="fa fa-sort float-right" onClick="sortTable(8)"></i></th>-->
							</tr>
						</thead>
						<tbody>
							<?php
				 					while($record = mysqli_fetch_assoc($rs))
									{?>
										<tr>
											<td><?php echo $record['order_id'] ?></td>
											<td><?php echo $record['quantity'] ?></td>
											<td><?php echo $record['items_id'] ?></td>
											<td><?php echo $record['id'] ?></td>
											<td><?php echo $record['sub_id'] ?></td>
											<td><?php echo $record['contact_no'] ?></td>
											<td><?php echo $record['delivery_address'] ?></td>
											<td><?php echo $record['order_date'] ?></td>
											<!--<td><?php //echo $record['order_status'] ?></td>-->
										</tr>										
									<?php
									}
							?>
						</tbody>
					</table>
				<?php }
						else
							echo "<br><br><br><br><h4 class='text-center'>No Order Found.</h4>";
	  	  ?>
        </div>
      </div>
   </div><!-- /.container-fluid-->
<!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>