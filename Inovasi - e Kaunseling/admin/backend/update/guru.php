<?php
include("../../../database/config.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Fetch the existing data for the given 'id'
        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = $id");
        $row = mysqli_fetch_array($sql);
    
        if (!$row) {
            echo "Invalid 'id' parameter";
            exit(); // Stop execution if the 'id' is invalid
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body data-bs-theme="dark">
<?php
    $link = "../../";
    include("../../src/nav.php");
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = $id");
    $row = mysqli_fetch_array($sql);
  ?>
    <div class="container" id="tambah">
        <form action="guru.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
            <div class="bg-body-tertiary p-5 rounded-3 mt-5" style="height: auto;">
                <p class="fs-2">Tambah Guru</p>
                    <div class="container bg-dark rounded-4 p-3 ">
                    <div class="mb-3" style="display: none;">
                            <label class="form-label">id</label>
                            <input type="text" name="id" class="form-control" value="<?php echo $row['id'];?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Guru</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'];?>">
                        </div>
    
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control" name="email" type="text" id="formFile" placeholder="xxx@gmail.com" value="<?php echo $row['email'];?>">
                        </div>

                        <div class="mb-3">
                          <label for="formFile" class="form-label">No Tel</label>
                          <input class="form-control" name="notel" type="text" id="formFile" placeholder="60*******" value="<?php echo $row['notel'];?>">
                      </div>
                        <div class="d-grid gap-2 d-flex justify-content-md-end">
                            <button class="btn btn-outline-danger" type="button" onclick="batal()">Batal</button>
                            <button class="btn btn-primary" type="submit" name="submit">Hantar</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>   
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $notel = $_POST['notel'];

        $query = "UPDATE admin SET nama = '$nama', email = '$email', notel= '$notel' WHERE id = '$id'";
        $sql = mysqli_query($conn, $query);
        echo"
    <script>
        alert('Success;');
        window.location.href='../../menu/guru.php';
    </script>
    ";
    }
}else{
    echo"
    <script>
        alert('Error');
        window.location.href='../../menu/guru.php';
    </script>
    ";
}
?>