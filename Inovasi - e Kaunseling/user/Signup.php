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
        <li class="link"><a href="game.php">Game</a></li> -->
      </ul>
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
      <header class="form-header">Register & SignUp Form pelajar</header>
      <form method="POST" action="" class="form">
        <div class="input-box">
          <label>Nama Anda</label>
          <input type="text" placeholder="Sila Masukkan Nama Penuh anda" required />
        </div>
        <div class="input-box">
          <label>Nombor Telefon</label>
          <input type="text" placeholder="Sila Masukkan Nombor Telefon Anda" required />
        </div>
        <div class="input-box">
          <label>No Kad Pengenalan</label>
          <input type="text" placeholder="Sila Masukkan Nombor Kad Pengenalan Anda" required />
        </div>
        <div class="input-box">
          <label>Email</label>
          <input type="text" placeholder="Sila Masukkan Alamat Email anda" required />
        </div>
        <div class="input-box">
          <label>No Kad Matrik</label>
          <input type="text" placeholder="Sila Masukkan Nombor Kad Matrik" required />
        </div>
        <div class="input-box address">
          <label>Kelas</label>
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Sila Pilih Kelas Anda</option>
                <option value="1 SVM KPD">1 SVM KPD</option>
							<option value="2 SVM KPD">2 SVM KPD</option>
							<option value="1 DVM KPD">1 DVM KPD</option>
							<option value="2 DVM KPD">2 DVM KPD</option>

							<option value="1 SVM KMK">1 SVM KMK</option>
							<option value="2 SVM KMK">2 SVM KMK</option>
							<option value="1 DVM KMK">1 DVM KMK</option>
							<option value="2 DVM KMK">2 DVM KMK</option>

							<option value="1 SVM HSK">1 SVM HSK</option>
							<option value="2 SVM HSK">2 SVM HSK</option>
							<option value="1 DVM HSK">1 DVM HSK</option>
							<option value="2 DVM HSK">2 DVM HSK</option>

							<option value="1 SVM HBP">1 SVM HBP</option>
							<option value="2 SVM HBP">2 SVM HBP</option>
							<option value="1 DVM HBP">1 DVM HBP</option>
							<option value="2 DVM HBP">2 DVM HBP</option>

							<option value="1 SVM BPM">1 SVM BPM</option>
							<option value="2 SVM BPM">2 SVM BPM</option>
							<option value="1 DVM BPM">1 DVM BPM</option>
							<option value="2 DVM BPM">2 DVM BPM</option>

							<option value="1 SVM BAK">1 SVM BAK</option>
							<option value="2 SVM BAK">2 SVM BAK</option>
							<option value="1 DVM BAK">1 DVM BAK</option>
							<option value="2 DVM BAK">2 DVM BAK</option>

							<option value="4 OPP">4 OPP</option>
							<option value="5 OPP">5 OPP</option>
              </select>
            </div>
          </div>
        </div>
        <button>Hantar</button>
        <!-- <button><a href="index.php">Kembali</a></button> -->
        <br>
        <br>
        <span>Dah Register mari...</span><a href="Signup.php">Login Sekarang</a>
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