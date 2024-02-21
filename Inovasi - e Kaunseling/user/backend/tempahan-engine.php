<?php

include_once("../../database/config.php");

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $notel = $_POST['notel'];
    $email = $_POST['email'];
    $masa = $_POST['masa'];
    $tarikh = $_POST['tarikh'];
    $kelas = $_POST['kelas'];

    $check_query = "SELECT * FROM tempahan WHERE masa = '$masa' AND tarikh = '$tarikh'";
    $check_result = mysqli_query($mysqli, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('data tindih');"
        . "window.location='index.php'</script>";
    } else {
        $result = mysqli_query ($mysqli, "INSERT INTO tempahan VALUES (NULL,'$nama','$notel','$email','$masa','$tarikh','$kelas')");
        echo "<script>alert('lulus');"
        . "window.location='index.php'</script>";
        
        
    }
}
?>
