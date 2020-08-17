<?php

if(isset($_POST['title'])){
    require '../model/database.php';

    $title = $_POST['title'];

    if(empty($title)){
        header("Location: ../view/todolist.php?mess=error");
    }else {
        $stmt = $database->prepare("INSERT INTO todos(title) VALUE(?)");
        $res = $stmt->execute([$title]);

        if($res){
            header("Location: ../view/todolist.php");
        }else {
            header("Location: ../view/todolist.php");
        }
        $database = null;
        exit();
    }
}else {
    header("Location: ../view/todolist.php");
}