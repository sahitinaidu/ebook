<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#" style="font-size: 14px"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>
									<?php if(($_SESSION['login']) == null)  
										{ ?> <li><a href="register.php" style="font-size: 14px"><i class="icon fa fa-user"></i>Create Account</a></li>
										<li><a href="my-wishlist.php" style="font-size: 14px"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="my-cart.php" style="font-size: 14px"><i class="icon fa fa-shopping-cart"></i>Book Bank</a></li>
					<li><a href="login.php" style="font-size: 14px"><i class="icon fa fa-sign-in"></i>Login</a></li>

									<?php }?>

					
					<?php if(($_SESSION['login'])!=null)

    {   ?>

									<li><a href="my-account.php" style="font-size: 14px"><i class="icon fa fa-user"></i>My Account</a></li>
									<li><a href="my-wishlist.php" style="font-size: 14px"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="my-cart.php" style="font-size: 14px"><i class="icon fa fa-shopping-cart"></i>My Bookbank</a></li>

				<li><a href="logout.php" style="font-size: 14px"><i class="icon fa fa-sign-out"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->


				
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->