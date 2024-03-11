<?php
    include("../../../database/config.php");
    $id = $_GET['id'];
    $query = "DELETE FROM aktiviti WHERE id = '$id'";
    $sql = mysqli_query($conn, $query);
    echo"
    <script>
        alert('Deleted Event');
        window.location.href='../../aktiviti.php';
    </script>
    ";
?>