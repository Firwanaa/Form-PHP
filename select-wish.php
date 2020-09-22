<?php?>
<h1>All Wishes</h1>
<a href="insert-wish-form.php">Add a new Wish</a>

<?php
//select-wish.php

//connect
$dsn = "mysql:host=localhost;dbname=wishes;charset=utf8mb4";

$dbusername="root";
$dbpassword="";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//Prepare and execute SQL Statement
$stmt = $pdo->prepare("SELECT * FROM `wish2`");

$stmt->execute();
?>
<p><b>Show all the content of Wish Table</b></p>
<?php
while($row = $stmt->fetch()) {     
    ?><div>
<p>
<?= $row["wishid"]; ?> 
<?= $row["name"]; ?> 
<?= $row["friendName"]; ?> 
<?= $row["email"]; ?> 
<?= $row["friendEmail"]; ?>
<?= $row["wish"]; ?>
<a href="edit-wish-form.php?wishid=<?= $row["wishid"]; ?>"> edit</a>
<a href="delete-wish.php?wishid=<?= $row["wishid"]; ?>"> delete</a>

</p>
</div>

<?php
}
?>

<?php?>
<h4>To show one wish only, pass wishid via URL as "wishid"</h4>

<?php
//select-wish.php
$wishid = $_GET['wishid'];
//connect
$dsn = "mysql:host=localhost;dbname=wishes;charset=utf8mb4";

$dbusername="root";
$dbpassword="";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//Prepare and execute SQL Statement
$stmt = $pdo->prepare("SELECT * FROM `wish2` WHERE `wish2`.`wishid`= $wishid");

$stmt->execute();
?>
<p><b>Show selected Wish</b></p>
<?php
while($row = $stmt->fetch()) {     
    ?><div>
<p>
<?= $row["wishid"]; ?>  
<?= $row["name"]; ?>  
<?= $row["friendName"]; ?>  
<?= $row["email"]; ?>  
<?= $row["friendEmail"]; ?> 
<?= $row["wish"]; ?> 
<a href="edit-wish-form.php?wishid=<?= $row["wishid"]; ?>"> edit</a>
<a href="delete-wish.php?wishid=<?= $row["wishid"]; ?>"> delete</a>

</p>
</div>

<?php
}
?>