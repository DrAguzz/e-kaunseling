<?php
    $user = "root";
    $pass = "";
    $e = "File Cant Open";
try{
    $dbh = new PDO('mysql:host=localhost; dbname=sistemkaunseling',$user,$pass);
} catch (PDOExection $e){
    echo $e;
}
?>