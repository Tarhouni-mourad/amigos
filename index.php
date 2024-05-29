<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amigo'S</title>
  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">  -->
  <link rel="stylesheet" href="resto-amigos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>
  <section class="veg">
    <header>
      <h1><img src="images/book-table/logo.jpg" alt="">Amigo'S <span class="changecontent"><ion-icon name="restaurant"></ion-icon></span></h1>
      <nav>
        <ul>
          <li><a style="color: #cda45e;" href="#Plats">Plats</a></li>
          <li><a href="#sandwich">Sandwich</a></li>
          <li><a href="#pizza">Pizza</a></li>
          <li><a href="#burger">Berger</a></li>
          <li><a href="#juice">Jus</a></li>
          <li><a href="#ice-cream">Glace</a></li>
          <li><a href="#table">Rés Table</a></li>
          <li><a href="#salle">Rés Sale</a></li>
          <li><a href="#location">Lieu</a></li>
          <button class="btn-cart"><h5>اضهار السلة</h5></button>
        </ul>
      </nav>



      <!--........ Cart Section ......

<div class="cart">
      <div class="cart-title">Cart Items</div>
      <div class="cart-content">
        <div class="cart-box">

      <div class="total">
        <div class="total-title">Total</div>
        <div class="total-price">Rs.0</div>
      </div>
      <button class="btn-buy">Place Order</button>
      <i class="fa fa-close" id="cart-close"></i>
   </div>
   

</div>   -->
    </header>

    <!--........ Cart Section ......-->

<div class="cart">
  <div class="cart-container">

  <div class="cart-content">
  <div class="grand-total">
    <div class="cart-title">
      <div style="color: rgb(255, 255, 255); font-size: large;" class="total-title">Conformation appelez mobile / 𝟐𝟔 𝟔𝟏𝟖 𝟓𝟏𝟗</div>
      <div style="color: red; font-size: large;" class="total-title">montant = total</div>
      <div style="color: red; font-size: larger;" class="total-price">Dnr 0</div>
              
    </div>
  </div>
  <div class="food-box">

  </div>
          <!-- Cart items will be appended here -->
          <div style="margin-left: 75px;" id="cart-close"><h6>اخفاء السلة</h6></div>

  </div>
        <!--
      <div class="total">
        <div class="total-title">Total</div>
        <div class="total-price">Rs.0</div>
      </div>
                -->
  </div>
</div>


    <!--.......Food Section.........-->

    <div id="Plats">
      <h3 style="margin-top: 150px;">Not Plats / <span1 class="changecontentx"></span1></h3>
    </div>

    <div class="container" id="Platsx">

      <div class="cart-count">0</div>




      <div class="food-box">
        <img src="images/plats/1 (1).jpg" class="food-img">
        <div class="food-title">Polonaise</div>
        <div style="color: white;" class="food-price">25/D</div>
        <button class="add-cart">Ajoute</button>
      </div>


      <div class="food-box">
        <img src="images/plats/1 (2).jpg" class="food-img" alt="">
        <div class="food-title">Griad de Voex</div>
        <div style="color: white;" class="food-price">25/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/plats/1 (3).jpg" class="food-img" alt="">
        <div class="food-title">Chicken Rice</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/plats/1 (1).webp" class="food-img" alt="">
        <div class="food-title">Creuvette</div>
        <div style="color: white;" class="food-price">35/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/plats/1 (4).jpeg" class="food-img" alt="">
        <div class="food-title">Spagetti</div>
        <div style="color: white;" class="food-price">20/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/plats/1 (3).jfif" class="food-img" alt="">
        <div class="food-title">Viand au Four</div>
        <div style="color: white;" class="food-price">30/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/plats/1 (7).jfif" class="food-img" alt="">
        <div class="food-title">Couscous</div>
        <div style="color: white;" class="food-price">30/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/plats/1 (18).jpg" class="food-img" alt="">
        <div class="food-title">Aija Mergeuz</div>
        <div style="color: white;" class="food-price">17/D</div>
        <button class="add-cart">Add to cart</button>
      </div>


    

    </div>


    <div id="sandwich">
      <h3 style="margin-top: 150px;">Sandwich / <span2 class="changecontentxx"></span2></h3>
    </div>

    <div class="container" id="sandwichx">

      <div class="food-box">
        <img src="images/sandwishes/snd (1).jpeg" class="food-img">
        <div class="food-title">Makloub</div>
        <div style="color: white;" class="food-price">17/D</div>
        <button class="add-cart">Ajoute</button>
      </div>


      <div class="food-box">
        <img src="images/sandwishes/snd (22).jpg" class="food-img" alt="">
        <div class="food-title">auThon</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/sandwishes/snd (24).jpg" class="food-img" alt="">
        <div class="food-title">Bageutte Farci</div>
        <div style="color: white;" class="food-price">19/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/sandwishes/snd (3).jpg" class="food-img" alt="">
        <div class="food-title">Special</div>
        <div style="color: white;" class="food-price">17/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/sandwishes/snd (4).jpg" class="food-img" alt="">
        <div class="food-title">Cornet</div>
        <div style="color: white;" class="food-price">21/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/sandwishes/snd (5).jpg" class="food-img" alt="">
        <div class="food-title">Brancco</div>
        <div style="color: white;" class="food-price">23/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/sandwishes/snd (7).jpg" class="food-img" alt="">
        <div class="food-title">Jambon</div>
        <div style="color: white;" class="food-price">17/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/sandwishes/snd (16).jpg" class="food-img" alt="">
        <div class="food-title">Pannini</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

    </div>



    <div id="pizza">
      <h3 style="margin-top: 150px;">Pizza / <span3 class="changecontent3"></span3></h3>
    </div>

    <div class="container" id="pizzax">

      <div class="food-box">
        <img src="images/pizza/pz (3).jpg" class="food-img" alt="">
        <div class="food-title">Margarita</div>
        <div style="color: white;" class="food-price">27/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/pizza/pz (17).jpg" class="food-img" alt="">
        <div class="food-title">Napolitan</div>
        <div style="color: white;" class="food-price">21/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/pizza/pz (20).jpg" class="food-img" alt="">
        <div class="food-title">Sea Food</div>
        <div style="color: white;" class="food-price">17/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/pizza/pz (18).jpg" class="food-img" alt="">
        <div class="food-title">Bourata</div>
        <div style="color: white;" class="food-price">31/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/pizza/pz (9).jpg" class="food-img" alt="">
        <div class="food-title">Traditional</div>
        <div style="color: white;" class="food-price">35/D</div>
        <button class="add-cart">Add to cart</button>
      </div>


      <div class="food-box">
        <img src="images/pizza/pz (11).jpg" class="food-img" alt="">
        <div class="food-title">Double Cheese</div>
        <div style="color: white;" class="food-price">30/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/pizza/pz (12).jpg" class="food-img" alt="">
        <div class="food-title">Sicilian</div>
        <div style="color: white;" class="food-price">25/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/pizza/pz (6).jpg" class="food-img" alt="">
        <div class="food-title">Mozarila</div>
        <div style="color: white;" class="food-price">23/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

    </div>

    <div id="burger">
      <h3 style="margin-top: 150px;">burger / <span4 class="changecontent4"></span4></h3>
    </div>

    <div class="container" id="Burgerx">

      <div class="food-box">
        <img src="images/burger/brg (1).jfif" class="food-img" alt="">
        <div class="food-title">Double Cheese</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/burger/brg (1).jpeg" class="food-img" alt="">
        <div class="food-title">Hum-Berger</div>
        <div style="color: white;" class="food-price">20/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/burger/brg (1).jpg" class="food-img" alt="">
        <div class="food-title">Kabab</div>
        <div style="color: white;" class="food-price">17/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/burger/brg (5).webp" class="food-img" alt="">
        <div class="food-title">Full Meal</div>
        <div style="color: white;" class="food-price">47/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/burger/brg (7).webp" class="food-img" alt="">
        <div class="food-title">Double Berger</div>
        <div style="color: white;" class="food-price">45/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/burger/brg (3).jpg" class="food-img" alt="">
        <div class="food-title">Triple Berger</div>
        <div style="color: white;" class="food-price">31/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/burger/brg (4).webp" class="food-img" alt="">
        <div class="food-title">Vegetable</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/burger/brg (7).jpg" class="food-img" alt="">
        <div class="food-title">Nougets</div>
        <div style="color: white;" class="food-price">35/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

    </div>


    <div id="juice">
      <h3 style="margin-top: 150px;">Jus / <span5 class="changecontent5"></span5></h3>

    </div>

    <div class="container" id="juicex">

      <div class="food-box">
        <img src="images/juice/jc (1).jpg" class="food-img" alt="">
        <div class="food-title">Kiwi-Fraise-Orange</div>
        <div style="color: white;" class="food-price">39/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/juice/jc (1).png" class="food-img" alt="">
        <div class="food-title">Kiwi</div>
        <div style="color: white;" class="food-price">21/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/juice/jc (2).webp" class="food-img" alt="">
        <div class="food-title">Fraise</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/juice/jc (3).webp" class="food-img" alt="">
        <div class="food-title">Coktaile</div>
        <div style="color: white;" class="food-price">30/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/juice/jc (6).jfif" class="food-img" alt="">
        <div class="food-title">Pastek</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/juice/jc (10).jfif" class="food-img" alt="">
        <div class="food-title">Apple-Kiwi-Orange</div>
        <div style="color: white;" class="food-price">51/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/juice/jc (5).jpg" class="food-img" alt="">
        <div class="food-title">Ananas-Orange</div>
        <div style="color: white;" class="food-price">31/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/juice/jc (4).png" class="food-img" alt="">
        <div class="food-title">Banana-Orange</div>
        <div style="color: white;" class="food-price">25/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

    </div>


    <div id="ice-cream">
      <h3 style="margin-top: 150px;">Glace / <span6 class="changecontent6"></span6></h3>
    </div>

    <div class="container" id="ice-creamx">

      <div class="food-box">
        <img src="images/ice-cream/ic (3).jpg" class="food-img" alt="">
        <div class="food-title">Cacao-Chocolat</div>
        <div style="color: white;" class="food-price">19/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/ice-cream/ic (8).jpg" class="food-img" alt="">
        <div class="food-title">Chocolat</div>
        <div style="color: white;" class="food-price">17/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/ice-cream/ic (15).jpg" class="food-img" alt="">
        <div class="food-title">Vanille</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/ice-cream/ic (33).jpg" class="food-img" alt="">
        <div class="food-title">Chocolat-Fraise</div>
        <div style="color: white;" class="food-price">15/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/ice-cream/ic (30).jpg" class="food-img" alt="">
        <div class="food-title">Double-Chocolat</div>
        <div style="color: white;" class="food-price">35/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/ice-cream/ic (26).jpg" class="food-img" alt="">
        <div class="food-title">Coktaile</div>
        <div style="color: white;" class="food-price">51/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/ice-cream/ic (1).jpg" class="food-img" alt="">
        <div class="food-title">Framboise</div>
        <div style="color: white;" class="food-price">31/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

      <div class="food-box">
        <img src="images/ice-cream/ic (5).jpg" class="food-img" alt="">
        <div class="food-title">Chocolat-Vanille</div>
        <div style="color: white;" class="food-price">52/D</div>
        <button class="add-cart">Add to cart</button>
      </div>

    </div>


    <div id="table">
      <h1 style="margin-top: 150px;">Réserver Votre Table</h1>
    </div>


    <div class="container" id="tablex">

      <div class="table">
        <img src="images/book-table/table (1).jpg" class="food-img" alt="">
        <div class="table-name">French Hall</div>
      </div>

      <div class="table">
        <img src="images/book-table/table (4).jpg" class="food-img" alt="">
        <div class="table-name">Hanibal Hall</div>
      </div>

      <div class="table">
        <img src="images/book-table/table (16).jpg" class="food-img" alt="">
        <div class="table-name">Royal Hall</div>
      </div>


      <div class="table">
        <img src="images/book-table/table (11).jpg" class="food-img" alt="">
        <div class="table-name">Open Earia Hall</div>
      </div>

    </div>

    <div id="salle">
      <h1 style="margin-top: 150px;">Réserver Votre Salle</h1>
    </div>


    <div class="container" id="sallex">

      <div class="salle">
        <img src="images/book-table/table (9).jpg" class="food-img" alt="">
        <div class="table-name">French Hall</div>
      </div>

      <div class="salle">
        <img src="images/book-table/table (13).jpg" class="food-img" alt="">
        <div class="table-name">Hanibal Hall</div>
      </div>

      <div class="salle">
        <img src="images/book-table/table (15).jpg" class="food-img" alt="">
        <div class="table-name">Royal Hall</div>
      </div>


      <div class="salle">
        <img src="images/book-table/table (18).jpg" class="food-img" alt="">
        <div class="table-name">Open Earia Hall</div>
      </div>

    </div>

     <!-- footer -->
     <footer id="footer"    data-aos="fade-up"
     data-aos-duration="1500">
       <h1 class="text-center">Cake Bakery</h1>
       <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, accusantium.</p>
       <div class="icons text-center">
        <a href="https://www.facebook.com/kakrelmarkaz/" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.youtube.com/@firasgasmy1229" target="_blank"><i class="bx bxl-youtube"></i></a>       
        <i class="bx bxl-twitter"></i>
        <i class="bx bxl-skype"></i>
        <i class="bx bxl-instagram"></i>

       </div>
       <div class="copyright text-center">
           &copy; Copyright <strong>Cake Bakery</strong> .All Rights Reserved
       </div>
       <div class="credite text-center">
        <a>Designed By <span>Tarhouni-Mourad </span><i class="fas fa-phone"> + 216 - 25 051 949</i></a>
       </div>
     </footer>
     <!-- footer -->
 

     
    <div id="location">
      <h1 style="margin-top: 150px;">Notre Address</h1>
    </div>








  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1604.6215384656077!2d10.732811376858045!3d36.45168152126447!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130298be1652db41%3A0x304310a32a3016aa!2sAmigos!5e0!3m2!1sar!2stn!4v1716836607043!5m2!1sar!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

</section>
  <script src="correct.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>