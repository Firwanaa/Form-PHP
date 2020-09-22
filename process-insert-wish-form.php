<?php
//process-insert-wish-form.php
//receive input
$yourName = $_POST["name"];
$friendName = $_POST["friendName"];
$yourEmail = $_POST["email"];
$yourFriendEmail = $_POST["friendEmail"];
$wish = $_POST["wish"];


$dsn = "mysql:host=localhost;dbname=wishes;charset=utf8mb4";

$dbusername="root";
$dbpassword="";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `wish2` (`name`, `friendName`, `email`, `friendEmail`, `wish`) VALUES ('$yourName', '$friendName', '$yourEmail', '$yourFriendEmail', '$wish');");
$stmt->execute();
?>

<h1>Process Insert Wish Form</h1>
<div>
	<p><b>Added To database</b>
	Return to the <a href="select-wish.php">wishes page</a>
	</p>
</div>
