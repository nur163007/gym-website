<?php
include 'sendmail.php';
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
	<div  class="section" id="section-3" style="margin-top: 8%;margin-bottom: 1%;">
		<div id="portfolio" class="portfolio">
			<div class="top-tours-head text-center">
				<h3>Online Programs</h3>
				<span></span> <img src="images/about1.jpg" alt=""> <span></span>
			</div>
			<div class="container" style="padding-bottom: 80px;">
				<div class="details">

					<h2><span></span> <img src="images/about1.jpg" alt=""style="height: 13px;width: 13px; border-radius: 50%;"> <span></span> Yoga</h2>
					<img src="Online Programm/Yoga.jpg" height="230" width="230"alt="">
					<p>Yoga is our most commonly requested group fitness class, and most people are already familiar with the concept of what Yoga is about.
						This type of exercise has nearly a dozen variations of its own, with the most popular styles including Hot Yoga, to Vinyasa 
						Flow and Gentle Yoga. The exercise itself consists of deliberate, concentrated movements and postures designed to promote flexibility, 
						tone and strengthen muscles and align the body. Most often, breathing techniques are also encompassed along with the movements, 
						allowing participants a relaxing experience coinciding with the movement. The end of the class typically ends in a ‘Savasana’ or
						meditative pose on the back to conclude the practice. This class is ideal for someone looking for a relaxing, quiet routine that helps 
					them release the day, while building muscle tone and flexibility.</p>

				</div>

				<div class="details">

					<h2><span></span> <img src="images/about1.jpg" alt=""style="height: 13px;width: 13px; border-radius: 50%;"> <span></span> Aerobic</h2>
					<img src="Online Programm/Aerobic.jpg" height="230" width="230"alt="">
					<p>Aerobics can be a really fun way to engage muscle endurance and strength in a low-impact setting. 
						This aerobic style class usually involves light dumbbells and movements designed to get your heart pumping at a steady, 
						consistent pace. Because of the lower intensity, classes are most effective in about an hour length time span. Normally, 
						when you attend this type of class, you can expect a warm-up, a period of cardio, some strength-training with smaller weights
						and a cool-down period. This workout is ideal for anyone who is looking for a steady, sometimes longer, low-impact routine that is fun 
					and unconventional from standard routines.</p>

				</div>

				<div class="details">

					<h2><span></span> <img src="images/about1.jpg" alt=""style="height: 13px;width: 13px; border-radius: 50%;"> <span></span> Zumba</h2>
					<img src="Online Programm/zumba.jpg" height="230" width="230"alt="">
					<p>There is no doubt in the fact that Zumba takes working out and converts it to something fun and upbeat that doesn’t feel
						like working out! A Zumba class offers a series of energetic dance routines that provide a great cardio workout by mixing low 
						intensity and high intensity moves for an interval-style, calorie burning, dance fitness party! The biggest key to joining a Zumba class
						is to not be worried about your dance moves, because everyone else is on the same boat! Anyone who loves to dance and is looking for a fun
						routine that disguises traditional, mundane workouts into fun and engaging dance would enjoy this type of group fitness class.
					</p>

				</div>

				<div class="details">

					<h2><span></span> <img src="images/about1.jpg" alt=""style="height: 13px;width: 13px; border-radius: 50%;"> <span></span> CARDIO</h2>
					<img src="Online Programm/cardio.png" height="230" width="230"alt="">
					<p>THE MAIN HEALTH BENEFITS OF CARDIO EXERCISE:<br><br>

						1.GREAT FOR WEIGHT LOSS<br>
						2.STRENGTHENS YOUR HEART<br>
						3. REDUCES THE RISK OF SEVERAL DISEASES<br>
						4. IMPROVES LUNG CAPACITY<br>
						5. NATURALLY BOOSTS ENERGY<br>
						6. GREAT FOR MENTAL HEALTH<br>
						7. BETTER SLEEP<br>
					8. HELPS THE IMMUNE SYSTEM.</p>

				</div>

				<div class="details">

					<h2><span></span> <img src="images/about1.jpg" alt=""style="height: 13px;width: 13px; border-radius: 50%;"> <span></span> Kickboxing</h2>
					<img src="Online Programm/Kickboxing.jpg" height="230" width="230"alt="">
					<p>Kickboxing is an adrenaline-pumping martial-arts style of fitness that provides a great cardiovascular workout and helps build endurance, 
						coordination, tones muscles and core, all while working the heart and burning a lot of calories. In addition to all these great benefits, 
						kickboxing classes also help with balance, flexibility and agility, and can even promote better self-defense. Classes usually require 
						weighted bags and intervals of punching and kicking in a small group setting, class-style setting, or in individual stations with weighted 
						bags. This class is a great option for anyone looking to relieve a lot of stress, or expel an excess of energy for calmer state of mind 
					and better sleep, as well as anyone simply looking for a more interactive, high-intensity cardio routine.</p>

				</div>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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