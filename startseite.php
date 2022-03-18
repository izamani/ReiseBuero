<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">ReiseBüro.</a>

   <nav class="navbar">
      <a href="startseite.php">Startseite</a>
      <a href="ueberuns.php">Über Uns</a>
      <a href="paket.php">Reise-Paket</a>
      <a href="buchen.php">Buchen</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>erkunden, entdecken, reisen</span>
               <h3>um die Welt reisen</h3>
               <a href="package.php" class="btn">entdecke mehr</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>erkunden, entdecken, reisen</span>
               <h3>entdecken Sie die neuen Orte</h3>
               <a href="package.php" class="btn">entdecke mehr</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>erkunden, entdecken, reisen</span>
               <h3>Machen Sie Ihre Tour lohnenswert</h3>
               <a href="package.php" class="btn">entdecke mehr</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Unsere Dienstleistungen </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>das Abenteuer</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Reiseführer</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Wandern</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Lagerfeuer</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>abseits der Straße</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>über uns</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
      <a href="about.php" class="btn">Weiterlesen</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> unsere Pakete </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Abenteuer & Touren</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">Buchen Sie jetzt</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Abenteuer & Touren</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">Buchen Sie jetzt</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Abenteuer & Touren</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">Buchen Sie jetzt</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Mehr laden</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>bis zu 50% Rabatt</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">Buchen Sie jetzt</a>
   </div>
</section>

<!-- home offer section ends -->




<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="home.php"> <i class="fas fa-angle-right"></i> Startseite</a>
      <a href="about.php"> <i class="fas fa-angle-right"></i> Über Uns</a>
      <a href="package.php"> <i class="fas fa-angle-right"></i> Reise-Paket</a>
      <a href="book.php"> <i class="fas fa-angle-right"></i> Buchen</a>
   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-angle-right"></i> Fragen stellen</a>
      <a href="#"> <i class="fas fa-angle-right"></i> über uns</a>
      <a href="#"> <i class="fas fa-angle-right"></i> Datenschutz-Bestimmungen</a>
      <a href="#"> <i class="fas fa-angle-right"></i> Nutzungsbedingungen</a>
   </div>

   <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +49-456-7890 </a>
      <a href="#"> <i class="fas fa-phone"></i> +49-222-3333 </a>
      <a href="#"> <i class="fas fa-envelope"></i> Dummy@gmail.com </a>
      <a href="#"> <i class="fas fa-map"></i> Mönchengladbach, Deutschland - 41238 </a>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
   </div>

</div>

<div class="credit"> erstellt von <span>Zamani Freelancer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->






<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>