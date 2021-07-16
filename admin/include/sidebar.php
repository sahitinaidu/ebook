<div class="span3">
					<div class="sidebar" style="background-color: #38353f">


<ul class="widget widget-menu unstyled">
	<li>
								<a href="manage-users.php">
									
									Manage Accounts
								</a>
							</li>
						
                                <li><a href="category.php">Create Genre </a></li>
                                <li><a href="subcategory.php">Add Author </a></li>
                                <li><a href="insert-product.php">Insert Book </a></li>
                                <li><a href="manage-products.php">Manage Book </a></li>
							 <li>
								
										<a href="todays-orders.php">
											
											Orders
  <?php
  
 $result = mysqli_query($con,"SELECT * FROM Orders");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
							
							 
                        
                           <li><a href="change-password.php">Change Password</a></li>
							
							<li>
								<a href="logout.php">
									
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
