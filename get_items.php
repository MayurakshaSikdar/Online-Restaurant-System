<?php require("config.php") ?>
<?php
$i = 0;
$type_id=$_POST['cat'];
$src=mysqli_query($con,"SELECT * FROM `items_table` WHERE `type_id`='$type_id' ORDER BY name ASC") or die(mysqli_error($con));
if(mysqli_num_rows($src)>0){
	while($rec=mysqli_fetch_assoc($src)){
		
		if($i%3 == 0)
			echo '<div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">';
		$i++;
		?>
			<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<?php //echo '<a href="event.php?id='.$rec['items_id'].'" style="text-decoration: none">' ?>
						   <form name="cart_<?php echo $i; ?>" id="cart_<?php echo $i; ?>" method="post">
							<img src="<?php echo $rec['fpath'] ?>" alt="<?php echo $rec['name'] ?>" title="<?php echo $rec['name'] ?>" class="img-responsive">
							<div class="captn">
								<h4><?php echo '<a href="event.php?id='.$rec['items_id'].'" style="text-decoration: none; color: #FFFFFF">'.$rec['name']."</a>"?></h4>
								<p>Rs.<?php echo $rec['price'] ?></p>
								<input type="hidden" name="items_id<?php echo $i ?>" id="items_id<?php echo $i ?>"  value="<?php echo $rec['items_id'] ?>">
								
								<div>
									<span style="color: #FFFFFF"><b>Qantity</b></span> <input type="text" name="qty<?php echo $i ?>" id="qty<?php echo $i ?>" value="1">
									<a href="javascript:void(0)" 
									onClick='add_to_cart("<?php echo $i ?>")'>
									<img src="images/add_to_cart.png" style="width: 150px;" id="addToCart"></a>
								</div>
							</div>
							</form>
					</div>
				</div>
				<?php
					if($i%3 == 0)
					{	
						echo '<div class="clearfix"> </div>';
						echo '</div>';
					}
				?>
			
		<?php
	}
	echo '<div class="clearfix"> </div>';
}else{
	?><h4 class="text-danger text-center">Sorry No Food Items Found</h4><?php
}
?>
<script type="text/javascript">
//	function event(type_id)
//	{
//		<?php
//			header('location:  ')
//		?>
//	}
</script>
