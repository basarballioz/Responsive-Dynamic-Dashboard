<?php
    session_start();
    ob_start();
    session_destroy();


    echo "Çıkış Yapılıyor...";
    header("Refresh: 1; url=ltsLogin.php");
    ob_end_flush();
?>