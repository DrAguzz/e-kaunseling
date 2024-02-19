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

    <style>
 /* tempahan form */
.form-header{
    background-color:white;
}
.form-container {
    position: relative;
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  }
  .form-container header {
    font-size: 1.5rem;
    color: #333;
    font-weight: 500;
    text-align: center;
  }
  .container .form {
    margin-top: 30px;
  }
  .form .input-box {
    width: 100%;
    margin-top: 20px;
  }
  .input-box label {
    color: #333;
  }
  .form :where(.input-box input, .select-box) {
    position: relative;
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 1rem;
    color: #707070;
    margin-top: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 0 15px;
  }
  .input-box input:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  }
  .form .column {
    display: flex;
    column-gap: 15px;
  }
  .form .gender-box {
    margin-top: 20px;
  }
  .gender-box h3 {
    color: #333;
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 8px;
  }
  .form :where(.gender-option, .gender) {
    display: flex;
    align-items: center;
    column-gap: 50px;
    flex-wrap: wrap;
  }
  .form .gender {
    column-gap: 5px;
  }
  .gender input {
    accent-color: rgb(130, 106, 251);
  }
  .form :where(.gender input, .gender label) {
    cursor: pointer;
  }
  .gender label {
    color: #707070;
  }
  .address :where(input, .select-box) {
    margin-top: 15px;
  }
  .select-box select {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    color: #707070;
    font-size: 1rem;
  }
  .form button {
    height: 55px;
    width: 100%;
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    background: #be38df;
    border-radius:8px;
  }
  .form button:hover {
    background: rgb(88, 56, 250);
  }

  a{
    color:#8b16b9;
  }
  button a{
    color:white;
  }

  /*Responsive*/
  @media screen and (max-width: 500px) {
    .form .column {
      flex-wrap: wrap;
    }
    .form :where(.gender-option, .gender) {
      row-gap: 15px;
    }
  }
  

    </style>
    <title>e-Kaunseling</title>
  </head>
  <body>

    <!-- bahagian navbar -->
    <nav>
    
    <!-- untuk logo -->
      <div class="nav__logo">e-Kaunseling<span>.</span></div>

    <!-- untuk button navbar -->
      <!-- <ul class="nav__links">
        <li class="link"><a href="lamanutama.php">Home</a></li>
        <li class="link"><a href="aktivitikaunseling.php">Aktiviti</a></li>
        <li class="link"><a href="tempahan.php">Tempahan</a></li>
        <li class="link"><a href="game.php">Game</a></li>
      </ul> -->
      <button class="btn"><a href="login.php">Daftar</a></button>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

    <!-- mula untuk borang tempahan -->
    <center>
    <section class="form-container">
      <header class="form-header">LogIn Form pelajar</header>
      <form action="../user/backend/login-engine.php" method="POST" class="form">
        <div class="input-box">
          <label>Nama Anda</label>
          <input type="text" name="nama" placeholder="Sila Masukkan Nama Penuh anda" required />
        </div>
        <div class="input-box">
          <label>No Kad Matrik</label>
          <input type="text" name="no_matrik" placeholder="Sila Masukkan Nombor Kad Matrik" required />
        </div>
        <button type="submit" name="submit">Hantar</button>
        <button><a href="landing.php">Kembali</a></button>
        <br>
        <br>
        <span>Belum Register mari...</span><a href="Signup.php">Daftar Sekarang</a>
      </form>
    </section>
    </center>
   
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

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