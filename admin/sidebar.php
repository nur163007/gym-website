<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
				</li>
				<?php if($_SESSION["admin_type"]=="admin")
				{?>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Manage Administration</a>
						<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="adduser.php">Add User</a></li>
							<li><i class="fa fa-id-badge"></i><a href="updateuser.php">Update User</a></li>
							<li><i class="fa fa-trash-o"></i><a href="deleteuser.php">Delete User</a></li>
						</ul>
					</li>
				<?php }?>


				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Manage Program</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="addprogram.php">Add Program</a></li>
						<?php if($_SESSION["admin_type"]=="admin")
						{?>
							<li><i class="fa fa-id-badge"></i><a href="update_program.php">Update Program</a></li>
							<li><i class="fa fa-trash-o"></i><a href="delete_program.php">Delete Program</a></li>
						<?php }?>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-ul"></i>Manage Services</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="addservice.php">Add Service</a></li>
						<?php if($_SESSION["admin_type"]=="admin")
						{?>
							<li><i class="fa fa-id-badge"></i><a href="update_service.php">Update Service</a></li>
							<li><i class="fa fa-trash-o"></i><a href="delete_service.php">Delete Service</a></li>
						<?php }?>
						
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-suitcase"></i>Manage Package</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="addpackage.php">Add Package</a></li>
						<?php if($_SESSION["admin_type"]=="admin")
						{?>
							<li><i class="fa fa-trash-o"></i><a href="deletepackage.php">Delete Package</a></li>
						<?php }?>
						
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon 	fa fa-shopping-cart"></i>Manage Shopping Cart</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="add-cart.php">Add Shopping Cart</a></li>
						<?php if($_SESSION["admin_type"]=="admin")
						{?>
							<li><i class="fa fa-trash-o"></i><a href="delete-cart.php">Delete Shopping Cart</a></li>
							<li><i class="fa fa-bars"></i><a href="update-cart.php">Update Shopping Cart</a></li>
						<?php }?>
						
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon 	fa fa-etsy"></i>Enquiry</a>
					<ul class="sub-menu children dropdown-menu"> 
						<?php if($_SESSION["admin_type"]=="admin")
						{?>
							<li>
								<i class="menu-icon fa fa-etsy"></i><a href="user-enquery.php">User Enquiry </a>
							</li>
							<li>
								<i class="menu-icon fa fa-etsy"></i><a href="checkorder.php">Order Enquiry </a>
							</li>
						<?php }?>
						
					</ul>
				</li>


			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside>