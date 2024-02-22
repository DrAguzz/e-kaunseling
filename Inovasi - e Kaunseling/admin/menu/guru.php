<?php
  include("../../database/config.php");
  $sql = mysqli_query($conn, "SELECT * FROM admin ORDER BY id DESC");
  $count = mysqli_num_rows($sql);
  $no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../css/main.css">
<body data-bs-theme="dark">
    <?php
      $link = "..";
      include("../src/nav.php");
    ?>
    <div class="container">
      <div class="bg-body-tertiary p-5 rounded-3 mt-5" style="height: auto; max-height: 800px;" id="senarai">
        <p class="fs-2">Senarai Guru Kaunseling</p>
            <div class="container bg-dark rounded-4 p-3 ">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Bil</th>
                      <th scope="col">Nama</th>
                      <th> Email </th>
                      <th> No. Tel </th>
                      <th scope="col" class="text-center">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  ;
                if($count = mysqli_num_rows($sql)){
                    while($row = mysqli_fetch_array($sql)){
            ?>
                <tr>
                  <th scope="row"><?php echo $no++; ?></th>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['notel']; ?></td>
                      
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="../backend/delete/guru.php?id=<?php echo $row['id'];?>"button type="button" class="btn btn-outline-danger mx-1">Padam</button></a>
                            <a href="../backend/update/guru.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-success mx-1">Kemaskini</button></a>
                          </div>
                      </td>
                  </tr>

            <?php            
                    }
                }
            ?>
                  </tbody> 
            </table>
            <div class="d-grid gap-2 d-flex justify-content-md-end">
                <button class="btn btn-primary" type="button" onclick="tambah()">Tambah</button>
            </div>
            </div>
        </div>

        <!-- tambah -->

        <div class="container" id="tambah" style=" display: none; ">
        <form action="../backend/guru.php" method="POST" enctype="multipart/form-data">
            <div class="bg-body-tertiary p-5 rounded-3 mt-5" style="height: auto;">
                <p class="fs-2">Tambah Guru</p>
                    <div class="container bg-dark rounded-4 p-3 ">
                        <div class="mb-3">
                            <label class="form-label">Nama Guru</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
    
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control" name="email" type="text" id="formFile" placeholder="xxx@gmail.com">
                        </div>

                        <div class="mb-3">
                          <label for="formFile" class="form-label">No Tel</label>
                          <input class="form-control" name="notel" type="text" id="formFile" placeholder="60*******">
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" name="gambar" type="file" id="formFile">
                      </div>
                        <div class="d-grid gap-2 d-flex justify-content-md-end">
                            <button class="btn btn-outline-danger" type="button" onclick="batal()">Batal</button>
                            <button class="btn btn-primary" type="submit" name="submit">Hantar</button>
                        </div>
                    </div>
            </div>
        </form>
        </div>    
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    function tambah(){
        document.getElementById("senarai").style.display="none";
        document.getElementById("tambah").style.display="block";

    }
    function batal(){
        document.getElementById("senarai").style.display="block";
        document.getElementById("tambah").style.display="none";

    }
</script>