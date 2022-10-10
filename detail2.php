<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
if (!empty($_GET)) {
    $value = $_GET["username"]; 
}
$stmt->bindParam(1, $value); 
$stmt->execute();
?>
    <?php while ($row = $stmt->fetch()) : ?>
    username : <?=$row ["username"]?><br>
    password : <?=$row ["password"]?><br>
    name : <?=$row ["name"]?><br>
    address : <?=$row ["address"]?><br>
    mobile : <?=$row ["mobile"]?><br>
    email : <?=$row ["email"]?><br>
    <hr>
    <?php endwhile; ?>
</body>

</html>