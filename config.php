<?php
$host = "sql102.infinityfree.com";
$user = "if0_42494227";
$pass = "MUSPgsin7Ym6odj";
$db = "if0_42494227_taskdb";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection Failed");
}
?>