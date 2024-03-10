<?php

include("../database/config.php");

?>
<!-- mula untuk buat e kaunseling -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- untuk link kan dengan cdn-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- untuk link kan dengan css -->
    <link rel="stylesheet" href="style.css" />

    <style>
/* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.game-body {
  height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f6f7fb;
}
::selection {
  color: #fff;
  background-color: #7d2ae8;
}
.container {
  padding: 2rem 7rem;
  border-radius: 14px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.result_images {
  display: flex;
  column-gap: 7rem;
}
.container.start .user_result {
  transform-origin: left;
  animation: userShake 0.7s ease infinite;
}
@keyframes userShake {
  50% {
    transform: rotate(10deg);
  }
}

.container.start .cpu_result {
  transform-origin: right;
  animation: cpuShake 0.7s ease infinite;
}
@keyframes cpuShake {
  50% {
    transform: rotate(-10deg);
  }
}
.result_images img {
  width: 100px;
}
.user_result img {
  transform: rotate(90deg);
}
.cpu_result img {
  transform: rotate(-90deg) rotateY(180deg);
}
.result {
  text-align: center;
  font-size: 2rem;
  color: #7d2ae8;
  margin-top: 1.5rem;
}

.option_image img {
  width: 50px;
}
.option_images {
  display: flex;
  align-items: center;
  margin-top: 2.5rem;
  justify-content: space-between;
}
.container.start .option_images {
  pointer-events: none;
}
.option_image {
  display: flex;
  flex-direction: column;
  align-items: center;
  opacity: 0.5;
  cursor: pointer;
  transition: opacity 0.3s ease;
}
.option_image:hover {
  opacity: 1;
}
.option_image.active {
  opacity: 1;
}
.option_image img {
  pointer-events: none;
}
.option_image p {
  color: #7d2ae8;
  font-size: 1.235rem;
  margin-top: 1rem;
  pointer-events: none;
}
    </style>
    <title>e-Kaunseling</title>
  </head>
  <body>


    <!-- bahagian navbar -->
    <nav>
    
    <!-- untuk logo -->
    <div class="nav__logo">
        <a href="lamanutama.php">e-Kaunseling<span>.</span></a>
    </div>

    <!-- untuk button navbar -->
    <ul class="nav__links">
        <li class="link"><a href="lamanutama.php">Home</a></li>
        <li class="link"><a href="aktivitikaunseling.php">Aktiviti</a></li>
        <li class="link"><a href="tempahan.php">Tempahan</a></li>
        <li class="link"><a href="game.php">Game</a></li>
      </ul>
      <ul></ul>
    </nav>

    <!-- bahagian header -->
    <header>
      <div class="section__container header__container">

        <!-- gambar untuk bahagian header -->
        <div class="header__image">
          <img src="img/game 2.jpg" alt="header" />
          <img src="img/game1.jpg" alt="header" />
        </div>

        <!-- untuk header content -->
        <div class="header__content">
          <div>
            <p class="sub__header">Mini Game</p>
            <h1>e-Kaunseling<br/>KVKS</h1>
            <p class="section__subtitle">
                Selamat Sejahtera,
                ini adalah laman web rasmi bagi laman Mini Game e-kaunseling yang dimana anda boleh bermain 
                permainan yang menyeronokkan.
            </p>

            <!-- untuk linkkan dengan tempah -->
            <div class="action__btns">
              <button class="btn">Lets Play</button>
          </div>
        </div>
      </div>
    </header>
    <!-- tamat header -->

  <!-- untuk buat bahagian game rock paper scissor -->
  <div>
    <section class="container">
      <div class="result_field">
        <center>
        <div class="result_images" style="position:relative;text-align:center;justify-content:center">
          <span class="user_result">
            <img src="images/rock.png" alt="" />
          </span>
          <span class="cpu_result">
            <img src="images/rock.png" alt="" />
          </span>
        </div>
        </center>
        
        <div class="result">Mari Kita Main!!</div>
      </div>
      <div class="option_images">
        <span class="option_image">
          <img src="images/rock.png" alt="" />
          <p>Batu</p>
        </span>
        <span class="option_image">
          <img src="images/paper.png" alt="" />
          <p>Kertas</p>
        </span>
        <span class="option_image">
          <img src="images/scissors.png" alt="" />
          <p>Gunting</p>
        </span>
      </div>
    </section>
   <script src="script.js" defer></script>
  </div>
  

    <!-- untuk footer -->
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">

        <!-- penerangan ekaunseling yang ringkas -->
          <h3>e-Kaunseling<span>.</span></h3>
          <p>
            Selamat Sejahtera,
            ini adalah laman web rasmi e-Kaunseling KVKS.
            Para pelajar boleh menempah waktu untuk sesi kaunseling dengan guru kaunseling
            untuk meluahkan apa-apa masalah yang dihadapi oleh para pelajar.
          </p>
        </div>

        <!-- untuk bahagian support ala ala company -->
        <div class="footer__col">
          <h4>Support</h4>
          <p>FAQs</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
          <p>Contact Us</p>
        </div>

        <!-- maklumat mengenai kv kuala selangor -->
        <div class="footer__col">
          <h4>Alamat</h4>
          <p>
            <span>Alamat:</span>Kolej Vokasional Kuala Selangor, 45600 Bestari Jaya, Selangor
          </p>
          <p><span>Email:</span>BHA3001@moe.edu.my</p>
          <p><span>No.Telefon:</span> 03-32718370</p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Hakcipta e-kauseling Kolej Vokasional Kuala Selangor.
      </div>
    </footer>
  </body>
</html>