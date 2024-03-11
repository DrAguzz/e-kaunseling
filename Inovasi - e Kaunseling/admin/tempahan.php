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
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>4 Otto</td>
                      <td>@mdo</td>
                      <td>Sesi 2</td>
                      <td>dd/mm/yyyy</td>
                      <td>
                      <select name="guru" id="" class="form-control">
    <option value="" hidden>click here</option>
    <?php
    $query2 = "SELECT * FROM admin";
    $sql2 = mysqli_query($conn, $query2);

    // Check if the query was successful
    if ($sql2) {
        // Fetch data from the result set using a while loop
        while ($row = mysqli_fetch_assoc($sql2)) {
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
            <?php
        }
    } else {
        // Handle query error (you might want to log or display an error message)
        echo "Error: " . mysqli_error($conn);
    }
    ?>
</select>

                      </td>
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-outline-danger">Tolak</button>
                            <button type="button" class="btn btn-outline-success">Terima</button>
                          </div>
                      </td> 
                    </tr>
                  </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>