<?php
include "../../all.php";
include "../init.php";
@include MODEL . "database.php";

$userName = strtolower($_POST['username']);
$password = $_POST['password'];

$sqlQuery = $database->prepare("SELECT * FROM users WHERE username = ?");
$sqlQuery->execute(array($userName));
$result = $sqlQuery->fetch(\PDO::FETCH_ASSOC);
$hashedPassword = $result['password'];


if (password_verify($password, $hashedPassword)) {
    //VERITABANINDA VERI BULUNUYORSA DEVAM ET
    if ($sqlQuery->rowCount()) {
        $_SESSION["user_id"] = $result['id'];
        $_SESSION["user"] = "$userName";
        $_SESSION["password"] = "$password";
        header("Location:index.php");
    } else {
        header("Location:app/view/ltsLogin.php?status=fail");
    }
} else {
    header("Location:app/view/ltsLogin.php?status=fail");
}


ob_end_flush();
?>
