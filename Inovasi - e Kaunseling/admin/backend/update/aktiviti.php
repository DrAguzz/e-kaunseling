<?php
include("../../../database/config.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Fetch the existing data for the given 'id'
        $sql = mysqli_query($conn, "SELECT * FROM aktiviti WHERE id = $id");
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
        $link = "..";
        include("../../src/nav.php");
        include_once("../../../database/config.php");
        $query = "SELECT * FROM aktiviti";
        $sql = mysqli_query($conn,$query);
        $count = mysqli_num_rows($sql);
        $no = 1;
    ?>
    <div class="container" id="tambah">
        <form action="./aktiviti.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
            <div class="bg-body-tertiary p-5 rounded-3 mt-5" style="height: auto;">
                <p class="fs-2">Aktiviti Kaunseling</p>
                    <div class="container bg-dark rounded-4 p-3 ">
                        <div class="mb-3">
                            <label class="form-label">Tajuk Aktiviti</label>
                            <input type="text" name="tajuk" class="form-control" value="<?php echo $row['tajuk'];?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tarikh Aktiviti</label>
                            <input type="date" name="tarikh" class="form-control" value="<?php echo $row['tarikh'];?>">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Maklumat Aktiviti</label>
                            <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3"><?php echo $row['detail'];?></textarea>
                        </div>
                        <div class="d-grid gap-2 d-flex justify-content-md-end">
                            <a href="../delete/aktiviti.php"><button class="btn btn-outline-danger" type="button" >Batal</button></a>
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
        $tajuk = $_POST['tajuk'];
        $tarikh = $_POST['tarikh'];
        $detail = $_POST['detail'];

        $query = "UPDATE aktiviti SET tajuk = '$tajuk', tarikh = '$tarikh', detail= '$detail' WHERE id = '$id'";
        $sql = mysqli_query($conn, $query);
        echo"
    <script>
        alert('Success;');
        window.location.href='../../aktiviti.php';
    </script>
    ";
    }
}else{
    echo"
    <script>
        alert('Error');
        window.location.href='../../aktiviti.php';
    </script>
    ";
}
?>