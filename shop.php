<?php
session_start();
include 'sendmail.php';
include('dbConnect.php');
if(isset($_POST["add_to_cart"])){
	$stock_count = $_POST['hidden_stock'];
	$quantity_count = $_POST['quantity'];
	if ($stock_count<$quantity_count) {
		echo '<script>alert ("Quantity is not available")</script>'; 
	}
	else{
		if(isset($_SESSION["shopping_cart"])){
			$item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
			if(!in_array($_GET["id"],$item_array_id)){
				$count =count($_SESSION["shopping_cart"]);
				$item_array =array(
					'item_id'          =>   $_GET["id"],
					'item_name'        =>   $_POST["hidden_name"],
					'item_price'       =>   $_POST["hidden_price"],
					'item_price'       =>   $_POST["hidden_price"],
					'item_quantity'    =>   $_POST["quantity"]
				);
				$_SESSION["shopping_cart"][$count]=$item_array;
			}
			else{
				echo '<script>alert ("Item Already Added")</script>'; 
				echo '<script>window.location="shop.php"</script>'; 
			}
		}
		else{
			$item_array =array(
				'item_id'      =>   $_GET["id"],
				'item_name'      =>   $_POST["hidden_name"],
				'item_price'      =>   $_POST["hidden_price"],
				'item_price'      =>   $_POST["hidden_price"],
				'item_quantity'      =>   $_POST["quantity"]
			);
			$_SESSION["shopping_cart"][0]=$item_array;
		}

	}

}
if(isset($_GET["action"])){
	if($_GET["action"]=="delete"){
		foreach($_SESSION["shopping_cart"] as $keys =>$values){
			if($values["item_id"]== $_GET["id"]){
				unset($_SESSION["shopping_cart"]["$keys"]); 
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
// if(isset($_GET["action"])){
// if($_GET["action"]=="empty"){
// 			unset($_SESSION["shopping_cart"]); 
// 			echo '<script>window.location="shop.php"</script>';
// 		}
// 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gym Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">


	<style>
		.wow:first-child {
			visibility: hidden;
		}
	</style>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); }


</script>
<!--js-->
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
</head>
<body>

	<!-- Start Header  -->
	<header>
		<div class="container">
			<div class="logo">
				<a href="index.php">Eaasy Fitness <span>Club</span></a>
			</div>

			<div class="navbar-nav ml-auto">
				<a href="cart.php" class="nav-item  active"style="text-decoration:none">
					<h5 class="px-5 cart"style="color:red">
						<i class="fa fa-shopping-cart"style="color:red"></i>Cart
						<?php
						if(isset($_SESSION["shopping_cart"])){
							$count=count($_SESSION["shopping_cart"]);
							echo "<span id=\"cart-count\" style=\"background-color:green;color:white;text-align:center;padding:0 0.9rem 0.1rem 0.9rem;border-radius:3rem;\">$count</span>";
						}
						else{
							echo "<span id=\"cart-count\" style=\"background-color:green;color:white;text-align:center;padding:0 0.9rem 0.1rem 0.9rem;border-radius:3rem;\">0</span>" ;
						}
						?>
					</h5>
				</a>
			</div>
			<a href="javascript:void(0)" class="ham-burger">
				<span></span>	
				<span></span>
			</a>

			<div class="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
				</ul>
			</div>

		</div>
	</header>
	<!-- End Header  -->

	<!-- Start Gallery -->
	<div  class="section" id="section-3" style="margin-top: 3%;margin-bottom: 1%;">
		<div id="portfolio" class="portfolio">
			<div class="top-tours-head text-center">
				<h3>Shopping Portal</h3>
				<span></span> <img src="images/about1.jpg" alt=""> <span></span>
			</div>
			<?php
			include('dbConnect.php');
			$sql =("SELECT * FROM shop ORDER BY shop_id ASC");
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					?>
					<div class="container">
						<div class="col-md-3"style="float:left;">
							<form method="post" action="shop.php?action=add&id=<?php echo $row["shop_id"];?>">
								<div style="border:1px solid #333;background-color:#f1f1f1;border-radius:5px;padding:16px;"align="center">
									<img src="admin/shop/<?php echo $row["image"];?>" height="150" width="200"class="img-responsive"/><br/>
									<h5 class="text-info"><?php echo $row["name"];?></h5>
									<h5 class="text-danger">$<?php echo $row["price"];?></h5>

									<?php if($row["stock"] >0){?>
										<h5 class="text-success">In Stock: <?php echo $row["stock"];?></h5>
										<input type="hidden" name="hidden_stock" value="<?php echo $row["stock"];?>"/>
									<?php } else { ?>
										<h5 class="text-warning">Out of Stock</h5>
									<?php } ?>
									<div class="row">
										<input type="number" name="quantity" class="form-control col-md-4 m-auto text-center"value="1"/>
										<input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>"/>
										<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>


										<?php if($row["stock"] >0){?>
												<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success col-md-6 m-auto"value="Add to Cart"/>

										<?php } else { ?>
												<input disabled style="margin-top:5px;" class="btn btn-dark col-md-6 m-auto"value="Not available"/>
										<?php } ?>

									
									</div>
								</div>

							</form><br>
						</div>
					</div>
					<?php
				}	
			}
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!--/top-tours-->

<!-- End Gallery -->

<!-- Start Contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="content">
			<div class="box form wow slideInLeft">
				<form action="" method="post">
					<input type="text" name="name" placeholder="Enter Name">
					<input type="email" name="email" placeholder="Enter Email">
					<input type="text" name="mobile" placeholder="Enter Mobile">
					<textarea  name="message" placeholder="Enter Message"></textarea>
					<button type="submit" name="submit">Send Message</button>
				</form>
			</div>
			<div class="box text wow slideInRight">
				<h2>Get Connected with Gym</h2>
				<div class="info">
					<ul>
						<li><span class="fa fa-map-marker"></span> <a href="https://www.google.com/maps/place/Bodyshape+Zone+Gym+Badda/@23.7875945,90.4233957,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c799ae28e02b:0xf05ae61d3dd0c9f!8m2!3d23.7875945!4d90.4255844" target="_blank" style="text-decoration:none;color:yellow;">GP Cha, 88/1/A Bir Uttam Rafiqul Islam Ave, Dhaka 1212</a> </li>
						<li><span class="fa fa-phone"></span><a href="tel:01641137048"style="text-decoration:none;color:white;">01641137048</a></li>
						<li><span class="fa fa-envelope"></span><a href="https://mail.google.com/mail/u/1/#inbox?compose=new" target="_blank"style="text-decoration:none;color:blue;"> info@easefitbd.com</a></li>
					</ul>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/meheditm01" target="_blank"><span class="fa fa-facebook"></span></a>
					<a href="https://www.instagram.com/mehedihr1995/"target="_blank"><span class="fa fa-instagram"></span></a>
					<a href="https://join.skype.com/invite/v1KgVGeEfb19" target="_blank"><span class="fa fa-skype"></span></a>
					<a href="https://www.youtube.com/channel/UCBGjAEle0X62c9Hx2FlhCzg?app=desktop"target="_blank"><span class="fa fa-youtube-play"></span></a>
				</div>


			</div>
		</div>
	</div>
</section>
<!-- End Contact -->



<!-- jquery -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/poper.min.js"></script>
<script>
	$(document).ready(function(){

		$(".ham-burger, .nav ul li a").click(function(){

			$(".nav").toggleClass("open")

			$(".ham-burger").toggleClass("active");
		})      
		$(".accordian-container").click(function(){
			$(".accordian-container").children(".body").slideUp();
			$(".accordian-container").removeClass("active")
			$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
			$(this).children(".body").slideDown();
			$(this).addClass("active")
			$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
		})

		$(".nav ul li a, .go-down").click(function(event){
			if(this.hash !== ""){

				event.preventDefault();

				var hash=this.hash; 

				$('html,body').animate({
					scrollTop:$(hash).offset().top
				},800 , function(){
					window.location.hash=hash;
				});

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
          }
      })
	})

</script>
<script src="js/wow.min.js"></script>
<script>
	wow = new WOW(
	{
		animateClass: 'animated',
		offset:       0,
	}
	);
	wow.init();
</script>
</body>
</html>