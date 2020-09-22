<?php
//process-edit-wish-form.php


//update record with new info


//Receive new data for the update
$yourName = $_POST["name"];
$friendName = $_POST["friendName"];
$yourEmail = $_POST["email"];
$yourFriendEmail = $_POST["friendEmail"];
$wish = $_POST["wish"];
$wishid = $_POST['wishid'];

//excute update SQL
//conect
$dsn = "mysql:host=localhost;dbname=wishes;charset=utf8mb4";

$dbusername="root";
$dbpassword="";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `wish2` SET `name` = '$yourName', `friendName` = '$friendName', `email` = '$yourEmail', `friendEmail` = '$yourFriendEmail' WHERE `wish2`.`wishid` = '$wishid';");


$stmt->execute();

?>
<p>You edited Wish # <?=$wishid;?><br>
	Return to the <a href="select-wish.php">Wishes page</a>
</p>