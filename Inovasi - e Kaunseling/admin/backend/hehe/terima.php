<?php

include("../../../database/config.php");
$bil = $_GET['id'];

$res = mysqli_query($mysqli, "UPDATE tempah SET status = 'lulus' WHERE bil = '$bil'");
echo "<script>alert('Tempahan untuk murid berjaya');"
. "window.location='senaraitempah.php'</script>";

?>