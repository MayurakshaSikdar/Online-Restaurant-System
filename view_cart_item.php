<?php
require("config.php");
		if(!empty($_SESSION['user_info'])){
				$sub_tot = array();
				$cart_src=mysqli_query($con,"SELECT c.*, i.* FROM cart_table c INNER JOIN items_table i ON c.items_id=i.items_id WHERE c.id=".$_SESSION['user_info']['id']." AND c.status='0'") or die(mysqli_error($con));		
				if(mysqli_num_rows($cart_src)>0){				
								
			?>
			<table id="cart" class="table table-hover table-condensed" style="font-size: 1.5em">
    				<thead>
						<tr>
							<th style="width:40%">Product</th>
							<th style="width:20%">Name</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
					<?php
					while($cart_rec=mysqli_fetch_assoc($cart_src))
					{
						array_push($sub_tot, ($cart_rec['price']*$cart_rec['qty']));
					?>					
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-3 hidden-xs">
<!--									<img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>-->
									<img src="<?php echo $cart_rec['fpath'] ?>" alt="<?php echo $cart_rec['name'] ?>" title="<?php echo $cart_rec['name'] ?>" class="img-responsive"></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php $cart_rec['fpath']?></h4>
									</div>
								</div>
							</td>
							<td data-th="Name"><?php echo $cart_rec['name']?></td>
							<td data-th="Price"><?php echo $cart_rec['price']?></td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="<?php echo $cart_rec['qty']?>" name="qty" onBlur="update_cart(<?php echo $cart_rec['cart_id'] ?>,this.value)">
							</td>
							<td data-th="Subtotal" class="text-center"><?php echo $cart_rec['price']*$cart_rec['qty'];?></td>
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm" title="Remove from Cart" onClick="remove_cart(<?php echo $cart_rec['cart_id'] ?>)"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<?php }?>
					<tfoot>
<!--
						<tr class="visible-xs">
							<td class="text-center"><strong>Total &nbsp;&nbsp;<?php echo array_sum($sub_tot);?></strong></td>
						</tr>
-->
						<tr>
<!--
						<style type="text/css">
							#checkout{
								text-align: center;
								transition: all 0.5s;
							}
							#checkout span{
								display: inline-block;
								position: relative;
								transition: 0.5s;
							}
							#checkout span:after{
								content: '\00bb';
								position: absolute;
								opacity: 0;
								right: -20px;
								transition: 0.5s;
							}
							#checkout:hover span{
								padding-right: 25px;
							}
							#checkout:hover span:after{
								opacity: 1;
								right: 0;
							}
						</style>
-->
							<td><a href="menu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i><span style="font-size: 15px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'"> Continue Shopping</span></a></td>
							<td colspan="3" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong style="d">Total&nbsp;&nbsp; <i class="fa fa-inr" style="font-size:20px"></i><?php echo array_sum($sub_tot);?></strong></td>
							<td><a href="checkout_confirmDetails.php" id="checkout" class="btn btn-success btn-block"><span style="font-size: 15px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">Checkout </span> <i class="fa fa-angle-right"></i></a></td>
							
						</tr>
					</tfoot>
				</table>
			<?php	}
				else{?>
						<center>
							<figure class="swing">
  								<img src="images/emptyCart.png" alt="Empty Cart" title="Cart Empty" style="width:300px;height:200px">
							</figure>  
						</center>
				<?php }
		}
			?>