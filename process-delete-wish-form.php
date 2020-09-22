<?php
//process-delete-wish-form.php


//delete row


//Receive new data for the Delete
$wishid = $_POST['wishid'];

//excute update SQL
//conect
$dsn = "mysql:host=localhost;dbname=wishes;charset=utf8mb4";

$dbusername="root";
$dbpassword="";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("DELETE FROM `wish2` WHERE `wish2`.`wishid` = $wishid;");


$stmt->execute();

?>

<p>You edited Wish # <?=$wishid;?><br>
	Return to the <a href="select-wish.php">Wishes page</a>
</p>