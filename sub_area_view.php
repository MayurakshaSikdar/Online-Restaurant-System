<?php require("config.php");?>

<?php
	$area_id = $_POST['area'];
	$query = mysqli_query($con, "SELECT * FROM `sub_area_table` WHERE area_id='$area_id' ORDER BY `sub_name`") or die(mysqli_error($con));
?>
	<select class="form-control" id="sub_area" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'" name="sub_area">
		<option>Select Sub-Area</option>
		<?php
				while($rec = mysqli_fetch_assoc($query)){
		?>
				  <option value="<?php echo $rec['sub_id']?>"><?php echo $rec['sub_name']?></option>
		<?php } ?>
	</select>