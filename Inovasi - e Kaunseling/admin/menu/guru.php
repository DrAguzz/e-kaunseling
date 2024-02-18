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
      <div class="bg-body-tertiary p-5 rounded-3 mt-5" style="height: auto; max-height: 800px;">
        <p class="fs-2">Senarai Guru Kaunseling</p>
            <div class="container bg-dark rounded-4 p-3 ">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Bil</th>
                      <th scope="col">Nama</th>
                      <th scope="col">No. Pendaftaran</th>
                      <th> Email </th>
                      <th> No. Tel </th>
                      <th scope="col" class="text-center">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>
                        01011134565
                      </td>
                      
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-outline-danger">Padam</button>
                            <button type="button" class="btn btn-outline-success">Kemaskini</button>
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>
                        01121111245
                      </td>
                    
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-outline-danger">Padam</button>
                            <button type="button" class="btn btn-outline-success">Kemaskini</button>
                        </div>
                      </td>

                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>Larry</td>
                      <td>@twitter</td>
                      <td>
                        01020029334
                      </td>
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-outline-danger">Padam</button>
                            <button type="button" class="btn btn-outline-success">Kemaskini</button>
                        </div>
                      </td>

                    </tr>
                  </tbody>
            </table>
            <div class="d-grid gap-2 d-flex justify-content-md-end">
                <button class="btn btn-outline-danger" type="button">Batal</button>
                <button class="btn btn-primary" type="button">Tambah</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>