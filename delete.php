<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop1; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
$stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
$stmt->bindParam(1, $_GET["username"]);
if ($stmt->execute())
    header("location: ws.6.php");
?>