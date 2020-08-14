<?php
include "../../all.php";
include "../init.php";
@include MODEL . "database.php";

$imageQuery = $database->prepare("SELECT * FROM profilephoto WHERE id = $result[id]");
$imageQuery->execute();
$photoResult = $imageQuery->fetch(\PDO::FETCH_ASSOC);
$photoId = $result['id'];

//FILE OPERATIONS
$imageLog = fopen("../img/imageLog.txt", "a+");
$text1 = "\nUser: " . $result['username'];
$text2 = "\nUser id: " . $result['id'];

if (isset($_POST['delete'])) {
    $deleteImage = $database->prepare("DELETE FROM profilephoto WHERE id = $photoId");
    $deleteImage->execute();

    if ($deleteImage->rowCount() == 1) {
        $deletedImage = "\nUser has deleted his profile picture\n";
        fwrite($imageLog, $text1);
        fwrite($imageLog, $text2);
        fwrite($imageLog, $deletedImage);
    }
}

$msg = "";
if (isset($_POST['upload'])) {
    $target = "../../app/img/" . basename($_FILES['image']['name']);

    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $file_type = $_FILES['image']['type'];
    $allowed = array("image/jpeg", "image/gif", "image/png", "image/jpg");

    if (!in_array($file_type, $allowed)) {
        $error_message = 'Sadece fotograf yüklemeniz gerekmektedir. Fotograf dosyasi secerek tekrar deneyin';
        echo "<b>" . $error_message . "</b>";
    } else {
        if ($_FILES["image"]["size"] > 10000000) {
            echo "File size exceeds maximum.";
        } else {
            if (isset($photoResult['image'])) {
                $updateImage = $database->prepare("UPDATE profilePhoto SET image = '$image', text = '$text' WHERE id = '$photoId'");
                $updateImage->execute();
                $userHasUpdated = "\nUser has updated his photo " . "\nimage name: " . $image . "\nimage text: " . $text . "\nimage id: " . $photoId . "\r\n";
                fwrite($imageLog, $text1);
                fwrite($imageLog, $text2);
                fwrite($imageLog, $userHasUpdated);

                if ($result['id'] == $photoId) {
                    $matches = "User id and photo id matches\n";
                    fwrite($imageLog, $matches);
                    fclose($imageLog);
                } else {
                    $notMatches = "User id and photo id not matches\n";
                    fwrite($imageLog, $notMatches);
                    fclose($imageLog);
                }
            } else {
                $addImage = $database->prepare("INSERT INTO profilephoto (id, image, text) VALUES ('$photoId', '$image', '$text')");
                $addImage->execute();
                $userAddedPhoto = "\nUser added his profile photo " . "\nimage name: " . $image . "\nimage text: " . $text . "\nimage id: " . $photoId . "\r\n";;
                fwrite($imageLog, $text1);
                fwrite($imageLog, $text2);
                fwrite($imageLog, $userAddedPhoto);

                if ($result['id'] == $photoId) {
                    $matches = "User id and photo id matches\n";
                    fwrite($imageLog, $matches);
                    fclose($imageLog);
                } else {
                    $notMatches = "User id and photo id matches\n";
                    fwrite($imageLog, $notMatches);
                    fclose($imageLog);
                }
            }
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Fotoğraf Başarıyla Veritabanına Eklendi";
            } else {
                $msg = "Fotoğraf Eklenirken Bir Hata Oluştu";
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Profil Fotoğrafı Yükle </title>
</head>

<?php include "../header.php"; ?>
<?php include "../navbar.php"; ?>


<body>
<div id="content-container" style="text-align: center">
    <form action="uploadimage.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div style="margin: auto; width: 50%; border: 3px solid gray; background-color: gray; color: white;">
            <label for="myfile"> Bir Dosya Seçiniz: </label>
            <b><input type="file" name="image"></b>
        </div>
        <div>
            <br>
            <b><textarea name="text" cols="40" rows="4" placeholder="Fotoğraf Açıklaması Giriniz..."></textarea></b>
        </div>
        <div>
            <b><input style="background-color: #077fff; color: white; padding: 16px 32px; margin: 4px 2px;"
                      type="submit" name="delete" value="Profil Fotoğrafımı Kaldır"></b>
        </div>
        <div>
            <b><input style="background-color: #077fff; color: white; padding: 16px 32px; margin: 4px 2px;"
                      type="submit" name="upload" value="Kaydet"></b>
    </form>
</div>


<?php include "../navigation.php"; ?>
<?php include "../footer.php"; ?>

</
>
</html>