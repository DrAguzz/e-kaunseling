<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktiviti</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="./css/main.css">
<body data-bs-theme="dark">
    <?php
        $link = ".";
        include("$link/src/nav.php");
        include_once("../database/config.php");
        $query = "SELECT * FROM aktiviti ORDER BY id DESC";
        $sql = mysqli_query($conn,$query);
        $count = mysqli_num_rows($sql);
        $no = 0;
    ?>

<div class="container">
      <div class="bg-body-tertiary p-5 rounded-3 mt-5" id="senarai" style="height: auto;">
        <p class="fs-2">Aktiviti Kaunseling</p>
            <div class="container bg-dark rounded-4 p-3 ">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Bil</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Tajuk</th>
                      <th scope="col">Detail</th>
                      <th> Tarikh Aktiviti </th>
                      <th scope="col" class="text-center">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                if($count > 0){
                    while($row = mysqli_fetch_array($sql)){
                        $no++;
            ?>
            
                    <tr>
                      <th scope="row"><?php echo "$no."; ?></th>
                      <td><img src="../upload/aktiviti/<?php echo $row['gambar']; ?>" alt="" style="height: 80px; width: auto;"></td>
                      <td><?php echo $row['tajuk'] ?></td>
                      <td style="width: 300px;"><textarea name="" id="" cols="30" rows="10" style=" max-height: 80px; " readonly><?php echo $row['detail'] ?></textarea></td>
                      <td>
                        <input type="date" id="userDate" class="form-control" value="<?php echo $row['tarikh']; ?>" readonly    >
                      </td>
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="./backend/delete/aktiviti.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-danger">Padam</button></a>
                            <a href="./backend/update/aktiviti.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-success">Kemaskini</button></a>
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
    </div>

    <!-- Hiden Klik -->

    <div class="container" id="tambah" style=" display:none; ">
        <form action="./backend/aktiviti.php" method="POST" enctype="multipart/form-data">
            <div class="bg-body-tertiary p-5 rounded-3 mt-5" style="height: auto;">
                <p class="fs-2">Aktiviti Kaunseling</p>
                    <div class="container bg-dark rounded-4 p-3 ">
                        <div class="mb-3">
                            <label class="form-label">Tajuk Aktiviti</label>
                            <input type="text" name="tajuk" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tarikh Aktiviti</label>
                            <input type="date" name="tarikh" class="form-control">
                        </div>
    
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Poster</label>
                            <input class="form-control" name="poster" type="file" id="formFile">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Maklumat Aktiviti</label>
                            <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="d-grid gap-2 d-flex justify-content-md-end">
                            <button class="btn btn-outline-danger" type="button" onclick="batal()">Batal</button>
                            <button class="btn btn-primary" type="submit">Hantar</button>
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