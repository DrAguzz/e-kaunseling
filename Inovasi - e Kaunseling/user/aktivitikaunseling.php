<?php

include("../database/config.php");

session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {

  header("Location: login-user.php");
  exit;
}

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
    <title>e-Kaunseling</title>
  </head>
  <body>

    <!-- bahagian navbar -->
    <nav>
    
    <!-- untuk logo -->
      <div class="nav__logo">e-Kaunseling<span>.</span></div>

    <!-- untuk button navbar -->
      <ul class="nav__links">
        <li class="link"><a href="lamanutama.php">Home</a></li>
        <li class="link"><a href="aktivitikaunseling.php">Aktiviti</a></li>
        <li class="link"><a href="tempahan.php">Tempahan</a></li>
        <li class="link"><a href="game.php">Game</a></li>
      </ul>
      <button class="btn"><a href="logout.php">Log Out</a></button>
    </nav>

    <!-- bahagian header -->
    <header>
      <div class="section__container header__container">

        <!-- gambar untuk bahagian header -->
        <div class="header__image">
          <img src="img/a2.jpg" alt="header" />
          <img src="img/a3.jpg" alt="header" />
        </div>

        <!-- untuk header content -->
        <div class="header__content">
          <div>
            <p class="sub__header">Aktiviti - Aktiviti</p>
            <h1>e-Kaunseling<br/>KVKS</h1>
            <p class="section__subtitle">
                Selamat Sejahtera,
                ini adalah laman web rasmi bagi laman aktiviti e-Kaunseling KVKS.
                Para pelajar boleh melihat pelbagai program dan aktivit yang di lakukan oleh Unit Bimbingan & Kaunseling
                Kolej Vokasional Kuala Selangor.
            </p>

            <!-- untuk linkkan dengan tempah -->
            <div class="action__btns">
              <button class="btn">Aktiviti</button>
          </div>
        </div>
      </div>
    </header>
    <!-- tamat header -->

    <!-- untuk bahagian aktivit -->
    <section class="kaunselor">
      <div class="section__container kaunselor__container">
        <h2 class="section__title">Aktivit - Aktiviti</h2>
        <p class="section__subtitle">
           Disini anda boleh antara program yang dijalankan oleh pihak Bimbingan & Kaunseling di Kolej Vokasional Kuala Selangor
         </p>
         <br>
        <!-- aktiviti 1 -->
         <div class="section__container gallary__container">
          <div class="image__gallary">
          <div class="gallary__co">
            <img src="img/a2.jpg" alt="gallary"/>
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
             Program-Program Kaunseling KVKS
            </h2>
            <p class="section__subtitle">
              Pelbagai program - program yang dijalankan untuk pelajar di kolej Vokasional Kuala Selangor dibawah 
              Unit Bimbingan & Kaunseling.
            </p>
          </div>
        </div>
      </div>

      <!-- aktiviti 2-->
      <div class="section__container gallary__container">
          <div class="image__gallary">
          <div class="gallary__co">
            <img src="img/a2.jpg" alt="gallary"/>
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
             Program-Program Kaunseling KVKS
            </h2>
            <p class="section__subtitle">
              Pelbagai program - program yang dijalankan untuk pelajar di kolej Vokasional Kuala Selangor dibawah 
              Unit Bimbingan & Kaunseling.
            </p>
          </div>
        </div>
      </div>

      <!-- aktiviti 3 -->
      <div class="section__container gallary__container">
          <div class="image__gallary">
          <div class="gallary__co">
            <img src="img/a2.jpg" alt="gallary"/>
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
             Program-Program Kaunseling KVKS
            </h2>
            <p class="section__subtitle">
              Pelbagai program - program yang dijalankan untuk pelajar di kolej Vokasional Kuala Selangor dibawah 
              Unit Bimbingan & Kaunseling.
            </p>
          </div>
        </div>
      </div>

      <!-- aktiviti 4 -->
      <div class="section__container gallary__container">
          <div class="image__gallary">
          <div class="gallary__co">
            <img src="img/a2.jpg" alt="gallary"/>
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
             Program-Program Kaunseling KVKS
            </h2>
            <p class="section__subtitle">
              Pelbagai program - program yang dijalankan untuk pelajar di kolej Vokasional Kuala Selangor dibawah 
              Unit Bimbingan & Kaunseling.
            </p>
          </div>
        </div>
      </div>

    </div>
      </div>
    </section>


<!-- gallery section -->
  <!-- untuk bahagian aktivit -->
  <section class="kaunselor">
      <div class="section__container kaunselor__container">
        <h2 class="section__title">Gallery</h2>
        <p class="section__subtitle">
           Disini anda boleh melihat momen yang sempat di ambil ketika program bersama 
           Pihak Bimbingan & Kaunseling di jalankan di Kolej Vokasional Kuala Selangor
         </p>
         <br>
         <!-- untuk gallery image grid -->
         <div class="gallery">
        <div class="image-container">
            <img src="1.jpg">
        </div>
        <div class="image-container">
            <img src="2.jpg">
        </div>
        <div class="image-container tall">
            <img src="3.jpg">
        </div>
        <div class="image-container">
            <img src="4.jpg">
        </div>
        <div class="image-container">
            <img src="5.jpg">
        </div>
        <div class="image-container tall">
            <img src="6.jpg">
        </div>
        <div class="image-container">
            <img src="7.jpg">
        </div>
        <div class="image-container">
            <img src="8.jpg">
        </div>
        <div class="image-container">
            <img src="9.jpg">
        </div>
        <div class="image-container">
            <img src="10.jpg">
        </div>
        
    </div>
      </div>
    </section>
  

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