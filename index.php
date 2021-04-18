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
 
 <header class="fixed-top">
<section class="topnav bg-warning  mb-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        
      </div>
      <div class="col-md-7">
        <h6> Connect to: <a href="https://mail.google.com/mail/u/1/#inbox?compose=new"target="_blank">mehedihr1990@gmail.com</a></h6>
        <h6>Tel: <a href="tel:01641137048">+880 1641137048</a></h6>
        <h6> <a href="register.php" class="join">Join Now</a></h6>
        <h6> <a href="shop.php" class="shop">Shop Now</a></h6>
      </div>
    </div>
  </div>
</section>
 
   <div class="container">
    <div class="logo">
      <a href="">Eaasy Fitness <span>Club</span></a>
    </div>
    <a href="javascript:void(0)" class="ham-burger">
     <span></span>	
     <span></span>
     <span></span>
   </a>
   <div class="nav">
     <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#service">Services</a></li>
      <li><a href="#classes">Physical Program</a></li>
      <li><a href="online-program.php">Online Program</a></li>
      <li><a href="#schedule">Schedule</a></li>
      <li><a href="#workout">Gallery</a></li>
      <li><a href="#price">Price</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</div>
</header>
<!-- End Header  -->

<!-- Start Home //////  SLIDER START-->


<section class="slider mt-5"id="home">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="galary/20200811_003459.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow slideInRight" data-wow-delay="2s">We are ready to <span>fit you</span></h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="galary/20200825_203115.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     <h1 class="wow fadeInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow fadeInRight" data-wow-delay="2s">We are ready to <span>fit you</span></h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="galary/20200825_203149.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow slideInRight" data-wow-delay="2s">We are ready to <span>fit you</span></h1>
      </div>
    </div>
      <div class="carousel-item">
      <img src="galary/105522175_160223422266762_8656301696484362076_o.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow slideInRight" data-wow-delay="2s">We are ready to <span>fit you</span></h1>
      </div>
    </div>
      <div class="carousel-item">
      <img src="galary/177-1772734_fitness-wallpaper-hd-1-facebook-fitness-cover-photo.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow slideInRight" data-wow-delay="2s">We are ready to <span>fit you</span></h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="galary/active-aerobics-beautiful-903171.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow slideInRight" data-wow-delay="2s">We are ready to <span>fit you</span></h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section class="aboutus section" id="about">
    <div class="about-head text-center">
    <h3>About Us</h3>
    <span></span><img src="images/about-img.png" alt=""><span></span>
    </div>
     <div class="container">
      <div class="row">
     <div class="col-md-4 about-grids">
       <h4><span class="icon1"></span>What Do We Do?</h4>
       <p>Easy Fitness Gym Has Been The Authority In Fitness Since 1965 Dating Back To The Original Easy Fitness Gym In Venice, California.</p>
     </div>
     <div class="col-md-4 about-grids grid2">
       <h4><span class="icon2"></span>Why are we different?</h4>
       <p>Easy Fitness Gym Has Multiple Awards For Excellence Under Its Belt. Easy Fitness Gym Has Expanded Its Fitness Profile To Offer All Of The Latest Equipment And Services Making It The Best In The Industry.</p>
     </div>
     <div class="col-md-4 about-grids">
       <h4><span class="icon3"></span>Why Choose Us?</h4>
       <p>Known For The Unrivalled Success Of Providing State-Of-The-Art Equipment And Fitness Knowledge With A Globally Proven Fitness Training Module</p>
             <div align="right"><a href="aboutus.php" class="more">Read More...</a></div>
     </div>
</div>
   </div>
</section>

<section class="about">
 <div class="container">
  <div class="content">
    <div class="box wow bounceInUp">
      <div class="inner">
        <div class="img">
         <img src="images/about1.jpg" alt="about" />
       </div>
       <div class="text">
         <h4>Free Consultation</h4>
         <p>Kennedy Fitness offers all members 1 hour of free personal training per member, per month in all of our 6 locations. Our nationally certified personal trainers work with you, one on one, as you systematically change programs every month.</p>
       </div>
     </div>
   </div>
   <div class="box wow bounceInUp" data-wow-delay="0.2s">
    <div class="inner">
      <div class="img">
       <img src="images/about2.jpg" alt="about" />
     </div>
     <div class="text">
       <h4>Best Training</h4>
       <p>Achieving the fitness results you want can sometimes feel overwhelming with so many experts giving advice on diet, exercise, and even sleep. Joining a gym can be equally perplexing. From navigating the exercise machines to developing a routine that achieves your personal goals can be daunting tasks.</p>
     </div>
   </div>
 </div>
 <div class="box wow bounceInUp" data-wow-delay="0.4s">
  <div class="inner">
    <div class="img">
     <img src="images/about3.jpg" alt="about" />
   </div>
   <div class="text">
     <h4>Build Perfect Body</h4>
     <p>Be consistent. Stop missing workouts, Be patient. Gains take years, not weeks, Get strong. You can't build muscle without challenging your body, Rely on compound movements.</p>
   </div>
 </div>
</div>
</div>
</div>
</section>


<!-- Start Service -->
<section class="service" id="service">
  <div class="container">
    <div class="content">
     <div class="text box wow slideInLeft">
      <h2>Services</h2>
      <p>welcome To Easy Fitness Gym and health care & offering an essential tool as part of your overall benefit package. a comprehensive Wellness Program designed to improve your employees health, well-being, and productivity. We Teach you the way to Get fit Anywhere any time.</p>
      <p> Our gym service in under medical supervision, qualified instructors consultation, training support by well trained trainer. Our advantage, Houmly environment, the biggest gym in Dhaka(10800sft Uttara ) (8000sft Gulshan) Fully air conditioned, New and latest gym equipment.</p>
      <a href="register.php" class="btn">Start Now</a>
    </div>

    <?php 
include ('dbConnect.php');
  $sql="select * from service where service_name = 'Cardiovascular Equipment' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){
// {echo "<pre>";
// print_r($data);  
      ?>
    <div class="accordian box wow slideInRight">
      <div class="accordian-container active">
       <div class="head">
        <h4><?php echo $data['service_name'];?></h4>
        <span class="fa fa-angle-down"></span>
      </div>
      <div class="body">
        <p style="text-align: justify;"><?php echo $data['short_description'];?></p>
       <div class="get mt-2">
        <a href="equip-details.php?service_name=<?php echo $data['service_name'];?>">Get Details</a>
      </div>
      </div>

     
    </div>
  <?php }
 $sql ="select * from service where service_name = 'Strength Training Equipment' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){
  ?>
    <div class="accordian-container">
     <div class="head">
      <h4><?php echo $data['service_name'];?></h4>
      <span class="fa fa-angle-up"></span>
    </div>
    <div class="body">
      <p style="text-align: justify;"><?php echo $data['short_description'];?></p>
     <div class="get mt-2">
        <a href="equip-details.php?service_name=<?php echo $data['service_name'];?>">Get Details</a>
      </div>
    </div>
    
  </div>
   <?php }
 $sql="select * from service where service_name = 'Group Fitness Class' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){
   ?>
  <div class="accordian-container">
   <div class="head">
    <h4><?php echo $data['service_name'];?></h4>
    <span class="fa fa-angle-up"></span>
  </div>
  <div class="body">
     <p style="text-align: justify;"><?php echo $data['short_description'];?></p>
     <div class="get mt-2">
        <a href="equip-details.php?service_name=<?php echo $data['service_name'];?>">Get Details</a>
      </div>
  </div>

</div>
<?php }
 $sql="select * from service where service_name = 'Other Services' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){
   ?>
<div class="accordian-container">
 <div class="head">
  <h4><?php echo $data['service_name'];?></h4>
  <span class="fa fa-angle-up"></span>
</div>
<div class="body">
  <p style="text-align: justify;"><?php echo $data['short_description'];?></p>
   <div class="get mt-2">
        <a href="equip-details.php?service_name=<?php echo $data['service_name'];?>">Get Details</a>
      </div>
</div>

</div>
<?php } ?>
</div>
</div>
</div>
</section>
<!-- End Service -->

<!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
   <div class="content">
    <div class="box img wow slideInLeft">
      <img src="images/class2.png" alt="classes" />
    </div>
    <div class="box text wow slideInRight">
      <h2>Our Programs</h2>
      <p>We Offer Four Programs Here: 
        1.Corporate Membership Program
        2. Personal Training Program 
        3. Quick Results Program.
        4. Wellness Program.
      Click Below To Know More  About  These </p>
      <?php 
include ('dbConnect.php');
  $sql="select * from program where program_name = 'Corporate Membership Program' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){
// {echo "<pre>";
// print_r($data);  
      ?>
      <div class="class-items">
        <div class="item wow bounceInUp">
         <div class="item-text one">
          <h4><?php echo $data['program_name']; ?></h4>
          <p style="text-align: justify;"><?php echo $data['short_description']; ?></p>
          <a href="program_details.php?id=<?php echo $data['program_id'];?>">Get Details</a>
        </div>
<?php }    

$sql="select * from program where program_name = 'Personal Training Program' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){

      ?>
         <div class="item-text two">
          <h4><?php echo $data['program_name']; ?></h4>
          <p style="text-align: justify;"><?php echo $data['short_description']; ?></p>
          <a href="program_details.php?id=<?php echo $data['program_id'];?>">Get Details</a>
        </div>
<?php } 

$sql="select * from program where program_name = 'Quick Results Program' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){

?>
      </div>
      <div class="item wow bounceInUp">
       <div class="item-text three">
        <h4><?php echo $data['program_name']; ?></h4>
        <p style="text-align: justify;"><?php echo $data['short_description']; ?></p>
        <a href="program_details.php?id=<?php echo $data['program_id'];?>">Get Details</a>
      </div>
    <?php }
$sql="select * from program where program_name = 'Wellness Program' limit 1";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){
    ?>
      <div class="item-text four">
          <h4><?php echo $data['program_name']; ?></h4>
          <p style="text-align: justify;"><?php echo $data['short_description']; ?></p>
          <a href="program_details.php?id=<?php echo $data['program_id'];?>">Get Details</a>
        </div>

      <?php } ?>
   </div>
 </div>
</div>
</div>
</div>
</section>
<!-- End Classes -->

<!-- Start Today -->
<section class="start-today">
  <div class="container">
    <div class="content">
     <div class="box text wow slideInLeft">
       <h2>Start Your Training Today</h2>
       <p>There are lots of decisions to make when you first take up exercise. Are you going to exercise at home, outdoors or in the gym? Are you going to exercise alone, in a team or with a training buddy? Every type of training has its own advantages. You decide which type of exercise is best for you. However, we can tell you that exercising in our gym has a lot of advantages.</p>
       <a href="register.php" class="btn">Start Now</a>
     </div>
     <div class="box img wow slideInRight">
       <img src="images/gallery4.jpg" alt="start today" />
     </div>

   </div>
 </div>
</section>
<!-- End Start Today -->

<!-- Start Schedule -->
<section class="schedule" id="schedule">
  <div class="container">
   <div class="content">
     <div class="box text wow slideInLeft">
       <h2>Classes Schedule</h2>
       <p>
        Our classes here six days a week. Saturday Fat Loss Program, Sunday Bodybuilding Program, Monday Muscle Building Program, Tuesday Fat Loss Program, Wednesday Muscle Building Program Thursday Bodybuilding Program.
      </p>
      <img src="images/schedule1.png" alt="schedule" />
    </div>
    <div class="box timing wow slideInRight">
     <table class="table">
       <tbody>
        <tr>
         <td class="day">Monday</td>
         <td><strong>7:00 AM</strong></td>
         <td><h6>Muscle Building Program</h6><br/> 7:00 AM to 11:00 PM</td>
         <td>Room No:210</td>
       </tr>
       <tr>
         <td class="day">Tuesday</td>
         <td><strong>7:00 AM</strong></td>
         <td><h6>Fat Loss Program </h6> <br/> 7:00 AM to 11:00 PM</td>
         <td>Room No:210</td>
       </tr>
       <tr>
         <td class="day">Wednesday</td>
         <td><strong>7:00 AM</strong></td>
         <td><h6>Muscle Building Program</h6><br/> 7:00 AM to 11:00 PM</td>
         <td>Room No:210</td>
       </tr>
       <tr>
         <td class="day">Thursday</td>
         <td><strong>7:00 AM</strong></td>
         <td><h6>Body Building Program </h6><br/> 7:00 AM to 11:00 PM</td>
         <td>Room No:210</td>
       </tr>
       <tr>
         <td class="day">Friday</td>
         <td colspan="3"><strong>OFF DAY</strong></td>

       </tr>
       <tr>
         <td class="day">Saturday</td>
         <td><strong>7:00 AM</strong></td>
         <td><h6>Fat Loss Program </h6><br/> 7:00 AM to 11:00 PM</td>
         <td>Room No:210</td>
       </tr>
       <tr>
        <td class="day">Sunday</td>
        <td><strong>7:00 AM</strong></td>
        <td><h6>Body Building Program </h6><br/> 7:00 AM to 11:00 PM</td>
        <td>Room No:210</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</section>
<!-- End Schedule -->

<!-- Start Gallery -->
<div  class="section" id="workout">
  <div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
    <h3>Workout Gallery</h3>
    <span></span> <img src="images/about1.jpg" alt=""> <span></span>

  </div>

  <div id="portfoliolist">


    <!-- image show for domestic tour package -->

    <?php 

    include('dbConnect.php'); 

    $sql="select * from package where package_name = 'body building training' limit 3";
    $result=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($result)){
// {echo "<pre>";
// print_r($data);  
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

     $sql="select * from package where package_name = 'fat loss training' limit 3";
     $result=mysqli_query($conn,$sql);
     while($data=mysqli_fetch_assoc($result)){
// {echo "<pre>";
// print_r($data);

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

     $sql="select * from package where package_name = 'muscle building training' limit 2";
     $result=mysqli_query($conn,$sql);
     while($data=mysqli_fetch_assoc($result)){
// {echo "<pre>";
// print_r($data);

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
  <div class="seemore text-center mt-5"> <a href="allimage.php"class="h3">See More Photos....</a> </div>
</div>

<!--/top-tours-->

<!-- End Gallery -->

<!-- Start Price -->
<section class="price-package" id="price">
  <div class="container">
   <h2>Choose Your Package</h2>
   <p class="title-p">Here we are offering three packages. Body Building Training, Fat Loss Training, Muscle Building Training. </p>
   <div class="content">
    <div class="box wow bounceInUp">
     <div class="inner">
       <div class="price-tag">
        10000tk/Month
      </div>
      <div class="img">
       <img src="images/price1.jpg" alt="price" />
     </div>
     <div class="text">
      <h3>Body Building Training</h3>
      <p>Get Free WiFi</p>
      <p>Month to Month</p>
      <p>No Time Restrictions</p>
      <p>Gym and Cardio</p>
      <p>Service Locker Rooms</p>
      <a href="register.php" class="btn">Join Now</a>
    </div>
  </div>
</div>
<div class="box wow bounceInUp" data-wow-delay="0.2s">
 <div class="inner">
   <div class="price-tag">
    15000tk/Month
  </div>
  <div class="img">
   <img src="images/price2.jpg" alt="price" />
 </div>
 <div class="text">
  <h3>Fat Loss Training</h3>
  <p>Get Free WiFi</p>
  <p>Month to Month</p>
  <p>No Time Restrictions</p>
  <p>Gym and Cardio</p>
  <p>Service Locker Rooms</p>
  <a href="register.php" class="btn">Join Now</a>
</div>
</div>
</div>
<div class="box wow bounceInUp" data-wow-delay="0.4s">
 <div class="inner">
   <div class="price-tag">
    20000tk/Month
  </div>
  <div class="img">
   <img src="images/price3.jpg" alt="price" />
 </div>
 <div class="text">
  <h3>Muscle Building Training</h3>
  <p>Get Free WiFi</p>
  <p>Month to Month</p>
  <p>No Time Restrictions</p>
  <p>Gym and Cardio</p>
  <p>Service Locker Rooms</p>
  <a href="register.php" class="btn">Join Now</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End Price -->

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
  <script src="js/jquery.min.js"></script>
  <script src="js/poper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

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






