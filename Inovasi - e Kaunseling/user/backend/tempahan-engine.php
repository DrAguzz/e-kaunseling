<?php

include_once("../../database/config.php");

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $notel = $_POST['notel'];
    $email = $_POST['email'];
    $sesi = $_POST['sesi'];
    $tarikh = $_POST['tarikh'];
    $kelas = $_POST['kelas'];
    $dateCreate = date_create($tarikh);

    $check_query = "SELECT * FROM tempahan WHERE sesi = '$sesi' AND tarikh = '$tarikh'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) >= 1) {
        echo "<script>alert('data tindih');"
        . "window.location='../tempahan.php'</script>";
    } else {
        $tarikh = date_format($dateCreate, 'd-m-Y');
        $result = mysqli_query ($conn, "INSERT INTO tempahan VALUES ('','$nama','$notel','$email','$sesi','$tarikh','$kelas',1)");
        echo "<script>alert('lulus');"
        . "window.location='../tempahan.php'</script>";
        
        
    }
}
?>
