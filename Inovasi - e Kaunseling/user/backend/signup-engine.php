<?php

include("../../database/config.php");

if(isset($_POST['submit'])){

	$nama = $_POST['nama'];
	$notel = $_POST['notel'];
    $nokp = $_POST['nokp'];
    $email = $_POST['email'];
    $no_matrik = $_POST['no_matrik'];
    $kelas = $_POST['kelas'];

	$result = mysqli_query ($mysqli, "INSERT INTO user VALUES (NULL, '$nama','$notel','$nokp','$email','$no_matrik','$kelas')");

	echo "<script>alert('Register & Sign Up berjaya.');"
    . "window.location='../login-user.php'</script>";
}
?>