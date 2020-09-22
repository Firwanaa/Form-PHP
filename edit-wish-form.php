<?php
//edit-wish-form.php?wishid=1

$wishid = $_GET["wishid"];

//retrieve exisiting data from the database table
//connect
$dsn = "mysql:host=localhost;dbname=wishes;charset=utf8mb4";

$dbusername="root";
$dbpassword="";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//Prepare and execute SQL Statement
$stmt = $pdo->prepare("SELECT * FROM `wish2` 
	WHERE `wishid` = $wishid");

$stmt->execute();

$row = $stmt->fetch();
echo("Update record# " . $row["wishid"]);



?>
<h1>Edit Wish Form</h1>
<form action="process-edit-wish-form.php" method="POST">

Name<input type="text" name="name" value="<?= $row["name"]; ?>">
Firend Name<input type="text" name="friendName" value="<?= $row["friendName"]; ?>">
email Address<input type="text" name="email" value="<?= $row["email"]; ?>">
Friend Email<input type="text" name="friendEmail" value="<?= $row["friendEmail"]; ?>">
wish<input type="text" name="wish" value="<?= $row["wish"]; ?>">
<input type="hidden" name="wishid" value="<?= $wishid; ?>">

<input type="submit">
</form>


