<?php

include "../init.php";
include "../../all.php";
@include MODEL . "database.php";

$alert = '<script language="javascript"> window.alert("Şifreniz en az 1 büyük, 1 küçük ve 1 özel karakter içerip, en az 6 karakterden oluşmalıdır."); 
                                         window.location.href="http://login/app/view/ltslogin.php";
          </script>';

$userName = strtolower($_POST['username']);
$password = $_POST['password'];
$email = strtolower($_POST['email']);

//BCRYPT HASHING YONTEMI ILE SIFRELEME
$hash = password_hash($password, PASSWORD_BCRYPT);

$checkIfUserExist = $database->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
$checkIfUserExist->execute([$userName, $email]);
$count = $checkIfUserExist->rowCount();

//EGER KULANICI HALIHAZIRDA VARSA TEKRAR REGISTER EKRANINA YONLENDIRIR
if ($count > 0) {
    header("Location:app/view/ltsRegister.php?status=alreadyRegistered");
} else {
    if (!preg_match("/^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{6,}$/", $password)) {
        echo $alert;
    } else {
        $sqlQuery = $database->prepare("INSERT INTO users (username, password, email)
                                                    VALUES ('$userName', '$hash', '$email')");
        $sqlQuery->execute();

        $_SESSION["user"] = "$userName";
        $_SESSION["password"] = "$hash";
        $_SESSION["email"] = "$email";

        $sqlQuery = $database->prepare("SELECT * FROM users ORDER BY id DESC LIMIT 1;");
        $sqlQuery->execute();
        $result = $sqlQuery->fetch(\PDO::FETCH_ASSOC);

        $_SESSION["user_id"] = $result['id'];

        header("Location:app/view/dashboard.php");
    }
}
?>