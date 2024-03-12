<?php
include("../database/config.php");
$result = mysqli_query($conn, "SELECT * FROM tempahan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="./css/main.css">
<body data-bs-theme="dark">
  <?php
    $link = ".";
    include("$link/src/nav.php");
  ?>
    <div class="container">
      <div class="bg-body-tertiary p-5 rounded-3 mt-5" style="heigth: auto;">
        <p class="fs-2">Senarai Tempahan</p>
            <div class="container bg-dark rounded-4 p-3 ">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Bil</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Email</th>
                      <th scope="col">Sesi</th>
                      <th>Tarikh Perjumpaan</th>
                      <th>Guru Bertugas</th>
                      <th scope="col" class="text-center">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
      $no=1;
      
      while($res = mysqli_fetch_array($result)) {
          echo "<tr>";  
          echo "<th>".$no; 
          echo "<th>".$res['nama']."</th>"; 
          echo "<th>".$res['kelas']."</th>";
          echo "<th>".$res['email']."</th>";
          echo "<th>".$res['sesi']."</th>";
          echo "<th>".$res['tarikh']."</th>";
          // Menambahkan elemen select untuk setiap baris tempahan
    // Query untuk data guru di dalam loop tempahan
    $query2 = "SELECT * FROM admin";
    $sql2 = mysqli_query($conn, $query2);
    
    // Menambahkan elemen select untuk setiap baris tempahan
    echo "<td>";
    echo "<select name='guru_$no' class='form-control'>";
    echo "<option value='' hidden>Pilih Guru</option>";
    
    // Loop untuk menampilkan opsi guru
    while ($row = mysqli_fetch_assoc($sql2)) {
        echo "<option value='".$row['id']."'>".$row['nama']."</option>";
    }

    echo "</select>";
    echo "</td>";

    // Tombol aksi lainnya
    echo "<td class='text-center'>";
    echo "<div class='btn-group' role='group' aria-label='Basic mixed styles example'>";
    echo "<button type='button' class='btn btn-outline-danger' onclick='tolakFunction()'>Tolak</button>";
    echo "<button type='button' class='btn btn-outline-success' onclick='terimaFunction()'>Terima</button>";
    echo "</div>";
    echo "</td>"; 
    
    echo "</tr>";
          
          $no++;
      }
         ?>

                    
                  </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>