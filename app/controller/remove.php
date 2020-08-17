<?php

if (isset($_POST['id'])) {
    require '../model/database.php';

    $id = $_POST['id'];

    if (empty($id)) {
        echo 0;
    } else {
        $stmt = $database->prepare("DELETE FROM todos WHERE id = ?");
        $res = $stmt->execute([$id]);

        if ($res) {
            echo 1;
        } else {
            echo 0;
        }
        $database = null;
        exit();
    }
} else {
    header("Location: ../view/todolist.php");
}