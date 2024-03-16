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
    include("../database/config.php");
    $sql = mysqli_query($conn,"SELECT * FROM tempahan");
    $sql2 = mysqli_query($conn,"SELECT * FROM admin");
    $no= 1;
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
                      if($count = mysqli_num_rows($sql)){
                        while($row = mysqli_fetch_array($sql)){ ?>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $row['nama'];?></td>
                          <td><?php echo $row['kelas'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['sesi'];?></td>
                          <td><?php echo $row['tarikh'];?></td>
                          <td><select name="pensyarah" id="" class="form-control">
                            <option value="" hidden>click here</option>
                            <?php
                              if($count = mysqli_num_rows($sql2)){
                                while($row = mysqli_fetch_array($sql2)){?>
                                  <option value="<?php echo $row['nama'];?>"><?php echo $row['nama'];?></option>

                                <?php }
                              }
                            ?>
                          </select>
                            </td>
                            <td>
                            <button type="button" class="btn btn-outline-danger">Tolak</button>
                            <button type="button" class="btn btn-outline-success">Terima</button>
                            </td>
                            <tr></tr>
                        <?php }

                      }
                      
                      
                      ?>
                    </tr>
                  </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>