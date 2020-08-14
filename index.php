<?php

    include "all.php";
    require_once "./vendor/autoload.php";

    if ($result['username'] == "") {
        header("Location:app/view/ltsLogin.php");
    }
    else {
        header("Location:app/view/dashboard.php");
    }

?>