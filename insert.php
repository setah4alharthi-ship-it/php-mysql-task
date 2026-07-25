<?php

include "config.php";

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO users(name, age) VALUES('$name','$age')";

mysqli_query($conn,$sql);

header("Location: index.php");

?>