<?php
    //SESSION BASLAT
    ob_start();
    session_start();

    include  "app/model/database.php";
    include "data/datatables/DataTables.php";

    $userid = $_SESSION["user_id"];

    $getQuery = $database->prepare("SELECT username, email, id FROM users WHERE id = '".$userid."' ");
    $getQuery->execute();
    $result = $getQuery->fetch(\PDO::FETCH_ASSOC);


?>


