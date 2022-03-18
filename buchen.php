<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Jetzt Bunchen</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Buchen Sie Ihre Reise!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="gib deinen Namen ein" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="geben sie ihre E-Mail Adresse ein" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="Geben Sie ihre Nummer ein" name="phone">
         </div>
         <div class="inputBox">
            <span>die Anschrift :</span>
            <input type="text" placeholder="geben Sie Ihre Adresse ein" name="address">
         </div>
         <div class="inputBox">
            <span>wohin :</span>
            <input type="text" placeholder="Ort, den Sie besuchen möchten" name="location">
         </div>
         <div class="inputBox">
            <span>wie viele :</span>
            <input type="number" placeholder="Anzahl der Gäste" name="guests">
         </div>
         <div class="inputBox">
            <span>Ankunft :</span>
            <input type="date" name="Ankunft">
         </div>
         <div class="inputBox">
            <span>Verlassen :</span>
            <input type="date" name="Verlassen">
         </div>
      </div>

      <input type="submit" value="einreichen" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->



















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

   <div class="credit">erstellt von<span>Zamani Freelancer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>