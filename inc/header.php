<div class="main-header">
	<!-- button responsive menu -->
	<div id="menu-toggle">
		<div id="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div id="cross">
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="container">
		<div class="logo-wrapper">
			<div class="logo">
				<a href=""><img src="images/logo/logo.jpg" alt=""></a>
			</div>
		</div>
		<div class="menu-wrapper">
			<div class="top-menu">
				<div class="form-wrapper">
					<form action="">
						<input type="text" class="form-control" placeholder="Search Products">
						<button><i class="ico-letter"></i></button>
					</form>
				</div>
				<div class="social">
					<div class="icon-social">
						<a href=""><img src="images/socials/ico-facebook.png" alt=""></a>
					</div>
					<div class="icon-social">
						<a href=""><img src="images/socials/ico-twister.png" alt=""></a>
					</div>
				</div>
				<ul class="user-menu">
					<li>
						<div class="language">
							<div id="options" data-selected-country="TH"></div>
						</div>
					</li>
					<li>
						<div class="nav-user">
							<span>Log In</span>
							<i class="ico-user user"></i>
						</div>
					</li>
					<li>
						<div class="nav-user">
							<span>Sign In</span>
							<i class="ico-user user-plus"></i>
						</div>
					</li>
				</ul>

			</div>
			<div class="main-menu">
				<ul>
					<li class="<?php if ( $page_name == 'home') { echo 'active'; } ?>">
						<a href="index.php" class="animated-button victoria-four">Home</a>
					</li>
					<li class="<?php if ( $page_name == 'products') { echo 'active'; } ?>">
						<a href="products-category.php" class="animated-button victoria-four">Products</a>
					</li>
					<li class="<?php if ( $page_name == 'join_us') { echo 'active'; } ?>">
						<a href="join-us.php" class="animated-button victoria-four">Join Us</a>
					</li>
					<li class="<?php if ( $page_name == 'service') { echo 'active'; } ?>">
						<a href="service.php" class="animated-button victoria-four">My Service</a>
					</li>
					<li class="<?php if ( $page_name == 'contact') { echo 'active'; } ?>">
						<a href="contact.php" class="animated-button victoria-four">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="menu-onMobile">
				<ul>
					<li class="<?php if ( $page_name == 'home') { echo 'active'; } ?>">
						<a href="index.php">Home</a>
					</li>
					<li class="<?php if ( $page_name == 'products') { echo 'active'; } ?>">
						<a href="products-category.php">Products</a>
					</li>
					<li class="<?php if ( $page_name == 'join_us') { echo 'active'; } ?>">
						<a href="join-us.php">Join Us</a>
					</li>
					<li class="<?php if ( $page_name == 'service') { echo 'active'; } ?>">
						<a href="service.php">My Service</a>
					</li>
					<li class="<?php if ( $page_name == 'contact') { echo 'active'; } ?>">
						<a href="javascript:void(0);">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
