<?php
try {
    $user = "root";
    $pass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=sistemkaunseling', $user, $pass);
} catch (PDOException $e) {
    echo $e;
}