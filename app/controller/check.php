<?php

if (isset($_POST['id'])) {
    require '../model/database.php';

    $id = $_POST['id'];

    if (empty($id)) {
        echo 'error';
    } else {
        $todos = $database->prepare("SELECT id, checked FROM todos WHERE id = ?");
        $todos->execute([$id]);

        $todo = $todos->fetch();
        $listId = $todo['id'];
        $checked = $todo['checked'];

        $listChecked = $checked ? 0 : 1;

        $res = $database->query("UPDATE todos SET checked = $listChecked WHERE id = $listId");

        if ($res) {
            echo $checked;
        } else {
            echo "error";
        }
        $database = null;
        exit();
    }
} else {
    header("Location: ../view/todolist.php");
}