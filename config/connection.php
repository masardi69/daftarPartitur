<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "daftar_partitur";

$con = mysqli_connect($server,$username,$password,$database);
if (!$con) {
    die("<script>alert('Connection failed !')</script>");
}

?>
