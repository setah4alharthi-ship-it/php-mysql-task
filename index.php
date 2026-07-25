<?php
include "config.php";

$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Users</h2>

<form action="insert.php" method="POST">

<input type="text" name="name" placeholder="Name" required>

<input type="number" name="age" placeholder="Age" required>

<button type="submit">Submit</button>

</form>


<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>


<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['id'] ?></td>

<td><?= $row['name'] ?></td>

<td><?= $row['age'] ?></td>

<td id="status<?= $row['id'] ?>">
<?= $row['status'] ?>
</td>

<td>
<button onclick="toggleStatus(<?= $row['id'] ?>)">
Toggle
</button>
</td>

</tr>

<?php } ?>

</table>


<script src="script.js"></script>

</body>
</html>