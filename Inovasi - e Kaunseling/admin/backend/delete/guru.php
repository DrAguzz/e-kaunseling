<?php
    include("../../../database/config.php");
    $id = $_GET['id'];
    $query = "DELETE FROM admin WHERE id = '$id'";
    $sql = mysqli_query($conn, $query);
    echo"
    <script>
        alert('Berjaya dipadam');
        window.location.href='../../menu/guru.php';
    </script>
    ";
?>