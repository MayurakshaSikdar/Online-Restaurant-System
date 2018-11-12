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
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require("header.php") ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Delivery Locations</li>
      </ol>
      <div class="row">
        <div class="col-12">
         <h3>Delivery Locations</h3> <br>
          <a href="location_add.php" class="btn btn-info">Add New Location</a><br>
          <br>
          <form name="item" method="post">
          	<div class="form-group">
            <div class="form-row">
            	<div class="col-md-4 text-right">
                
                
                <script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("sub_table");
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
                
                
                <label style="padding-top: 4px; font-size: 20px">Select Area</label>
                </div>
              <div class="col-md-4">
                <select name="area_id" class="form-control">
					<?php 
						$src = "SELECT * FROM area_table ORDER BY area_name";
						
						$rs=mysqli_query($con, $src) or die(mysqli_error($con));?>
							<option value="select" selected class="dropdown dropdown-menu">---Select Area---</option>
							<?php
								while ($rec= mysqli_fetch_assoc($rs))
								{
								   echo '<option name="sub_area" value="'.$rec['area_id'].'">' . $rec['area_name'] . '</option>';
								}
						?>
					</select>
              </div>
              <div class="col-md-4">
                <input type="submit" name="ok" value="Search" class="btn btn-primary">
              </div>
            </div>
          </div>
            	</form>
                    </div>
                    <div class="col-12">
                    <?php
		if(isset($_POST['ok']))
		{
			$area_id = $_POST['area_id'];
			$sql = "SELECT s.*,a.area_name FROM sub_area_table s INNER JOIN area_table a ON s.area_id=a.area_id WHERE s.area_id='$area_id'";
			$rs = mysqli_query($con, $sql) or die (mysqli_error($con));
			if(mysqli_num_rows($rs) > 0)
			{
				?>
                <table class="table table-bordered text-center table-hover table-striped" id="sub_table">
                <thead class="bg-dark text-white">
                	<tr>
                    	<th>Sr No.<i class="fa fa-sort-numeric-asc float-right" onClick="sortTable(0)"></i></th>
                        <th>Name of the Area<i class="fa fa-sort-alpha-asc float-right" onClick="sortTable(1)"></i></th>
                        <th>Name of the Location<i class="fa fa-sort-alpha-asc float-right" onClick="sortTable(2)"></i></th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
					$sl=1;
					while($row=mysqli_fetch_assoc($rs)){
						?>
                        <tr>
                        	<td><?php echo $sl ?></td>
                            <td><?php echo $row['area_name']?> </td>
                            <td><?php echo $row['sub_name']?> </td>
                            <td><a href="location_update.php?id=<?php echo $row['sub_id']; ?>"><img src="../images/edit.png"></a></td>
							<td><a href="location_delete.php?id=<?php echo $row['sub_id']; ?>"><img src="../images/delete.png"></a></td>
                        </tr>
						<?php
						$sl++;
					}
					?>
                </tbody>
                </table> 
				<?php
				
			}else{
				?><h4 class="text-center text-danger">No Location Found</h4><?php
			}
		}
	?>
                    </div>
               </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
   	<?php
	require("footer.php");
	?>