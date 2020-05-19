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
	<div class="menu-onMobile">
		<ul>
			<li class="user-control">
				<div class="user-wrapper">
					<div class="nav-user">
						<span>เข้าสู่ระบบ</span>
						<i class="ico-user user"></i>
					</div>
					<div class="nav-user">
						<span>ลงทะเบียน</span>
						<i class="ico-user user-plus"></i>
					</div>
				</div>
				<div class="select-lang">
					<a href="" class="active">ไทย</a>
					<a href="">English</a>
				</div>
			</li>
			<li>
				<div class="form-wrapper">
					<form action="">
						<input type="text" class="form-control" placeholder="Search Products">
						<button><i class="ico-letter"></i>ค้นหาสินค้า</button>
					</form>
				</div>
			</li>
			<li class="<?php if ( $page_name == 'home') { echo 'active'; } ?>">
				<a href="index.php">หน้าแรก</a>
			</li>
			<li class="<?php if ( $page_name == 'products') { echo 'active'; } ?> has-menu" >
				<a href="products-category.php">บริษัทผู้จัดจำหน่าย</a>
			</li>
			<li class="<?php if ( $page_name == '') { echo 'active'; } ?>">
				<a href="">ค้นหาผู้ซื้อ</a>
			</li>
			<li class="<?php if ( $page_name == 'service') { echo 'active'; } ?>">
				<a href="service.php">บริการของเรา</a>
			</li>
			<li class="<?php if ( $page_name == 'join_us') { echo 'active'; } ?>">
				<a href="join-us.php">ร่วมงานกับเรา</a>
			</li>
			<li class="<?php if ( $page_name == 'contact') { echo 'active'; } ?>">
				<a href="contact.php">ติดต่อเรา</a>
			</li>
		</ul>
	</div>

	<div class="container">
		<div class="logo-wrapper">
			<div class="logo">
				<a href=""><img src="images/logo/logo.jpg" alt=""></a>
			</div>
		</div>
		<div class="menu-wrapper">
			<div class="main-menu">
				<ul>
					<li class="<?php if ( $page_name == 'home') { echo 'active'; } ?>">
						<a href="index.php" class="animated-button victoria-four">หน้าแรก</a>
					</li>
					<li class="<?php if ( $page_name == 'products') { echo 'active'; } ?> has-menu" >
						<a href="products-category.php" class="animated-button victoria-four">บริษัทผู้จัดจำหน่าย</a>
					</li>
					<li class="<?php if ( $page_name == '') { echo 'active'; } ?>">
						<a href="" class="animated-button victoria-four">ค้นหาผู้ซื้อ</a>
					</li>
					<li class="<?php if ( $page_name == 'service') { echo 'active'; } ?>">
						<a href="service.php" class="animated-button victoria-four">บริการของเรา</a>
					</li>
					<li class="<?php if ( $page_name == 'join_us') { echo 'active'; } ?>">
						<a href="join-us.php" class="animated-button victoria-four">ร่วมงานกับเรา</a>
					</li>
					<li class="<?php if ( $page_name == 'contact') { echo 'active'; } ?>">
						<a href="contact.php" class="animated-button victoria-four">ติดต่อเรา</a>
					</li>
				</ul>
				<div class="social">
					<div class="icon-social">
						<a href=""><img src="images/socials/ico-facebook.png" alt=""></a>
					</div>
					<div class="icon-social">
						<a href=""><img src="images/socials/ico-twister.png" alt=""></a>
					</div>
				</div>
				<div class="language">
					<div id="options" data-selected-country="TH"></div>
				</div>
			</div>
			<div class="top-menu">
				<div class="form-wrapper">
					<form action="">
						<input type="text" class="form-control" placeholder="Search Products">
						<button><i class="ico-letter"></i>ค้นหาสินค้า</button>
					</form>
				</div>
				<ul class="user-menu">
					<li>
						<div class="nav-user">
							<span>เข้าสู่ระบบ</span>
							<i class="ico-user user"></i>
						</div>
					</li>
					<li>
						<div class="nav-user">
							<span>ลงทะเบียน</span>
							<i class="ico-user user-plus"></i>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</div>
</div>

<div class="btn-to-top">
	<img src="images/icons/ico-top.png" alt="">
	<p>GO TO</p>
	<span>TOP</span>
</div>
