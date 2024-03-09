<?php
  include('../database/config.php');
  //senarai tempahan
  $query1 = "SELECT * FROM tempahan";
  $sql1 = mysqli_query($conn, $query1);
  $no1 = 1;

  // jadual
  $Date = date("Y-m-d");

  $query2 = "SELECT * FROM tempahan WHERE tarikh = '$Date'";
  $sql2 = mysqli_query($conn, $query2);
  $no2 = 1;

  // guru kaunseling
  $query3 = "SELECT * FROM admin";
  $sql3 = mysqli_query($conn, $query3);
  $no3 = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @media (min-width: 400px){
            .d-flex{
                diaplay: flex;
            }
        }
    </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="./css/main.css">
<body data-bs-theme="dark">
    <?php
      $link = ".";
      include("$link/src/nav.php");
    ?>
    <div class="container mt-5" style="width: 100%;">
        <div class="row">
            <a href="./tempahan.php" style="text-decoration: none; list-style-type: none" >
            <div class="col">
                <div class="container bg-body-tertiary rounded-2">
                    <p class="fs-4 mx-4 pt-2 py-0" style="color: white;">Tempahan</p>
                    <div data-bs-spy="scroll" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example p-3" style="height: 250px;" tabindex="0">
                        <div class="container overflow-auto" style="max-width: 100%; max-height: 100%;">
                            <table class="table table-striped rounded-1">
                                <thead>
                                    <tr>
                                      <th scope="col">Bill</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Tempahan</th>
                                      <th scope="col">Tarikh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    
                                  if($count = mysqli_num_rows($sql1)){
                                      while($row = mysqli_fetch_array($sql1)){
                                ?>
                                    <tr>
                                      <th scope="row"><?php echo $no1++; ?></th>
                                          <td><?php echo $row['nama']; ?></td>
                                          <td><?php echo $row['sesi']; ?></td>
                                          <td><?php echo $row['tarikh']; ?></td>
                                      </tr>

                                <?php            
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <div class="d-flex justify-content-between mt-4" style="width: 100%;">

        <div class="p-2 bg-body-tertiary" style="width: 48%;">
          <a href="./index.php" style="text-decoration: none; list-style-type: none">
                <div class="container bg-body-tertiary rounded-2">
                    <p class="fs-4 mx-4 pt-2 py-0" style="color:white;">Jadual</p>
                    <div data-bs-spy="scroll" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example p-3" style="height: 250px;" tabindex="0">
                        <div class="container overflow-auto" style="max-width: 100%; max-height: 100%;">
                            <table class="table table-striped rounded-1">
                                <thead>
                                    <tr style="display: fixed;">
                                      <th scope="col" style="width : 20px;">Bill</th>
                                      <th scope="col" style="text-align: center;">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    
                                    if($count = mysqli_num_rows($sql2)){
                                        while($row2 = mysqli_fetch_array($sql2)){
                                          if($row2['tarikh'] == $Date){
                                  ?>
                                        <tr>
                                          <th scope="row"><?php echo $no2++; ?></th>
                                          <td style="text-align: center;">
                                            <?php
                                              if($row2['sesi'] == $no2){
                                                echo $row2['nama']; 
                                              }else{
                                                echo "-";
                                              }
                                            ?>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row"><?php echo $no2++; ?></th>
                                          <td style="text-align: center;">
                                            <?php
                                              if($row2['sesi'] == $no2){
                                                echo $row2['nama']; 
                                              }else{
                                                echo "-";
                                              }
                                            ?>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row"><?php echo $no2++; ?></th>
                                          <td style="text-align: center;">
                                            <?php
                                              if($row2['sesi'] == $no2){
                                                echo $row2['nama']; 
                                              }else{
                                                echo "-";
                                              }
                                            ?>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row"><?php echo $no2++; ?></th>
                                          <td style="text-align: center;">
                                            <?php
                                              if($row2['sesi'] == $no2){
                                                echo $row2['nama']; 
                                              }else{
                                                echo "-";
                                              }
                                            ?>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row"><?php echo $no2++; ?></th>
                                          <td style="text-align: center;">
                                            <?php
                                              if($row2['sesi'] == $no2){
                                                echo $row2['nama']; 
                                              }else{
                                                echo "-";
                                              }
                                            ?>
                                          </td>
                                        </tr>
  
                                  <?php            
                                          }
                                        }
                                      }
                                  ?>
                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="p-2 bg-body-tertiary" style="width: 49%;">
              <a href="./menu/guru.php" style="text-decoration: none; list-style-type: none">
                <div class="container bg-body-tertiary rounded-2" >
                    <p class="fs-4 mx-4 pt-2 py-0" style="color: white;">Guru Kaunseling</p>
                    <div data-bs-spy="scroll" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example p-3" style="height: 250px;" tabindex="0">
                        <div class="container overflow-auto" style="max-width: 100%; max-height: 100%;">
                            <table class="table table-striped rounded-1">
                                <thead>
                                    <tr>
                                      <th scope="col">Bill</th>
                                      <th scope="col">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    
                                    if($count = mysqli_num_rows($sql3)){
                                        while($row3 = mysqli_fetch_array($sql3)){
                                  ?>
                                      <tr>
                                        <th scope="row"><?php echo $no3++;?></th>
                                        <td><?php echo $row3['nama'];?></td>
                                      </tr>
                                      <tr>
                                      
                                  <?php            
                                          }
                                      }
                                  ?>
                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>Jacob</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">5</th>
                                        <td>Jacob</td>
                                      </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </a>
            </div>

        </div>
        
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>