<?php if(!isset($_SESSION)) { session_start(); } ?>
<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="dashboard.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
				</li>
				
				<li>
					<a href="profile.php"><i class="menu-icon fa fa-user"></i>View Profile </a>
				</li>

				<li>
					<a href="updateprofile.php"><i class="menu-icon fa fa-user-plus"></i>Update Profile </a>
				</li>

				<li>
					<a href="view-program.php"><i class="menu-icon fa fa-briefcase"></i>View Program </a>
				</li>
				<li>
					<a href="cart.php"><i class="menu-icon fa fa-shopping-cart"></i>View Cart </a>
				</li>
				<li>
					<a href="orderlist.php"><i class="menu-icon fa fa-list"></i>View Orderlist </a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside>