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
      <ul>
        <button class="btn"><a href="logout.php">Log Out</a></button>
      </ul>
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
            <p class="sub__header">Mari Buat Janji Temu</p>
            <h1>e-Kaunseling<br/>KVKS</h1>
            <p class="section__subtitle">
                Selamat Sejahtera,
                ini adalah laman web rasmi e-Kaunseling KVKS.
                Para pelajar boleh menempah waktu untuk sesi kaunseling dengan guru kaunseling
                untuk meluahkan apa-apa masalah yang dihadapi oleh para pelajar.
            </p>

            <!-- untuk linkkan dengan tempah -->
            <div class="action__btns">
              <button class="btn"><a href="tempahan.php">Tempah</a></button>
              <div class="story">
                <div class="video__image">
                  <img src="img/ig1.jpeg" alt="story" />
                  <span><i class="ri-play-fill"></i></span>
                </div>
                <span><a href="https://www.instagram.com/mpp.kvkualaselangor?igsh=NnlxNDJoN2E3ZjR2">Layari Lebih Lanjut</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- tamat header -->


  <!-- untuk section 2 = perkhidmatan -->
    <section class="section__container perkhidmatan__container">
      <div class="section__header">
        <div>
          <h2 class="section__title">Perkhidmatan Yang Tawarkan</h2>
          <p class="section__subtitle">
            Para guru kaunseling menawarkan pelbagai perkhidmatan kepada murid untuk membantu mereka mengatasi masalah, meningkatkan kesejahteraan emosi, dan mencapai potensi mereka.
          </p>
        </div>
      </div>

    <!-- perkidmatan 1 -->
      <div class="perkhidmatan__grid">
        <div class="perkhidmatan__card">
          <img src="img/a1.jpg" alt="destination"/>
          <!-- overlay effect transparent -->
          <div class="perkhidmatan__details">
            <p class="perkhidmatan__title">Kaunseling</p>
            <p class="perkhidmatan__subtitle">Individu</p>
          </div>
        </div>

    <!-- perkidmatan 2 -->
        <div class="perkhidmatan__card">
          <img src="img/a2.jpg" alt="destination" />
          <!-- overlay effect transparent -->
          <div class="perkhidmatan__details">
            <p class="perkhidmatan__title">Kaunseling</p>
            <p class="perkhidmatan__subtitle">Kerjaya</p>
          </div>
        </div>

     <!-- perkidmatan 3-->
        <div class="perkhidmatan__card">
          <img src="img/a3.jpg" alt="destination" />
          <!-- overlay effect transparent -->
          <div class="perkhidmatan__details">
            <p class="perkhidmatan__title">Kaunseling</p>
            <p class="perkhidmatan__subtitle">Kumpulan</p>
          </div>
        </div>
     <!-- perkidmatan 4 -->
        <div class="perkhidmatan__card">
          <img src="img/a4.jpg" alt="destination" />
          <!-- overlay effect transparent -->
          <div class="perkhidmatan__details">
            <p class="perkhidmatan__title">Kaunseling</p>
            <p class="perkhidmatan__subtitle">Akademik</p>
          </div>
        </div>
      </div>
    </section>

<!-- section 3 = kaunselor-->
    <section class="kaunselor">
      <div class="section__container kaunselor__container">
        <h2 class="section__title">Kaunselor KVKS</h2>
        <p class="section__subtitle">
            Sebagai Kaunselor Kolej, mereka akan membantu pelajar dalam pelbagai 
            aspek kehidupan mereka termasuk masalah akademik, perkembangan peribadi,
            masalah kewangan, dan lain-lain yang berkaitan dengan kehidupan kolej.
        </p>

        <!-- pensyarah 1 -->
        <div class="kaunselor__grid">
          <div class="kaunselor__card">
            <img src="img/NORHAMISAH.jpg" alt="kaunselor" />
            <div class="kaunselor__details">
              <p>Puan Norhamisah Binti Ahmad</p>
              <div class="jawatan"> Kaunselor KVKS</div>
              <div class="tempahan__price">
                <button class="tempah__now">Hubungi</button>
              </div>
            </div>
          </div>
          <div class="kaunselor__card">
            <img src="img/NUR HANI.jpg" alt="kaunselor" />
            <div class="kaunselor__details">
              <p>Puan Hani Binti Halim</p>
              <div class="jawatan">Kaunselor KVKS</div>
              <div class="tempahan__price">
                <button class="tempah__now">Hubungi</button>
              </div>
            </div>
          </div>
          <div class="kaunselor__card">
            <img src="img/NOR ZURINA.jpg" alt="kaunselor" />
            <div class="kaunselor__details">
              <p>Puan Nor Zurina Binti Ahmad</p>
              <div class="jawatan">Kaunselor KVKS</div>
              <div class="tempahan__price">
                <button class="tempah__now">Hubungi</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- bahagian gallary aktiviti -->
    <section class="gallary">
      <div class="section__container gallary__container">
        <div class="image__gallary">
          <div class="gallary__col">
            <img src="img/a2.jpg" alt="gallary" />
          </div>
          <div class="gallary__col">
            <img src="img/bilik.png" alt="gallary" />
            <img src="img/a4.jpg" alt="gallary" />
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
            <button class="btn"><a href="aktivitikaunseling.php">Mari Terokai..</a></button>
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