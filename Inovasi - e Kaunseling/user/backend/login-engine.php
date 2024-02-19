<?php
include("../../database/config.php");
session_start();

if(isset($_POST['submit'])){
	$no_matrikP = $_POST['no_matrik'];

	$_SESSION['submit'] = $_POST['submit'];

	$find_user_sql = mysqli_query($mysqli, "SELECT * FROM user WHERE no_matrik = '$no_matrikP'");
	$find_user = mysqli_fetch_array($find_user_sql);
	$no_matrik = $find_user['no_matrik'];

	if($no_matrikP == $no_matrik){
		$nama = $find_user['nama'];
		$namaPost = $_POST['nama'];

		if($nama == $nama){
			$_SESSION['logged_in']=true;
			echo "<script>alert('Log In berjaya.');"
            . "window.location='../lamanutama.php'</script>"; 
		}else{
			$_SESSION['error']="Murid Tidak Dijumpai";
			echo "<script>alert('Maklumat salah 1');"
    		. "window.location='../login-user.php'</script>";
		}

	}else{
		$_SESSION['error']="Murid Tidak Dijumpai";
		echo "<script>alert('Maklumat salah 2');"
    		. "window.location='../login-user.php'</script>";
	}
}else{
	$_SESSION['error']="Submit Error";
	echo "<script>alert('Maklumat salah 3');"
    		. "window.location='../login-user.php'</script>";
}
?>