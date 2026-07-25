<?php

include "config.php";

$id = $_POST['id'];

mysqli_query($conn,
"UPDATE users SET status = IF(status=0,1,0) WHERE id=$id"
);

$result = mysqli_query($conn,
"SELECT status FROM users WHERE id=$id"
);

$row = mysqli_fetch_assoc($result);

echo $row['status'];

?>