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
      <h3>Workout Gallery</h3>
      <span></span> <img src="images/about1.jpg" alt=""> <span></span>

      </div>

       <div id="portfoliolist">


<!-- image show for domestic tour package -->

<?php 
 include('dbConnect.php'); 

$sql="select * from package where package_name = 'body building training'";
$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($result)){
 
?>
          <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
            <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
              <a href="details.php?id=<?php echo $data['package_id'];?>"class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                 <img src="admin/packimages/<?php echo $data['package_image']; ?>"  alt=""/></a>
                             </div>
          </div>
          
<?php }?>


<!-- image show for foreign tour package -->

<?php 

 include('dbConnect.php'); 

$sql="select * from package where package_name = 'fat loss training'";
$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($result)){

  
?>
          <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
            <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
              <a href="details.php?id=<?php echo $data['package_id'];?>" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                 <img src="admin/packimages/<?php echo $data['package_image']; ?>"alt=""/></a>

          </div>
          </div>
         
<?php }?>


<!-- image show for short date tour -->
<?php 

 include('dbConnect.php'); 
 
$sql="select * from package where package_name = 'muscle building training'";
$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($result)){

  
?>

          <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
            <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
              <a href="details.php?id=<?php echo $data['package_id'];?>" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                  <img src="admin/packimages/<?php echo $data['package_image']; ?>" alt=""/></a>

            </div>
          </div>

        
  <?php }?>

  <!-- image show for long date tour -->
         
        
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