<?php
//delete-wish.php?wishid=1

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
echo("Are you sure you want to delete wish# " . $row["wishid"]);
echo($row["name"]);?><br><?php
echo($row["friendName"]);?><br><?php
echo($row["email"]);?><br><?php
echo($row["friendEmail"]);?><br><?php
echo($row["wish"]);?><br><?php


?>
<form action="process-delete-wish-form.php" method="POST">
	<input type="hidden" name="wishid" value="<?=$row["wishid"];?>">
	<input type="submit" value="Confirm Delete">
</form>

