<?php

    $hash = "JG5hbWUgPSAiYmFzYXIgYmFsbGlveiI7IGVjaG8gJG5hbWU7=";
    $code = base64_encode($hash);
    $code2 = base64_encode($code);
    $code3 = base64_encode($code2);

    $encode3 = base64_decode($code3);
    $encode2 = base64_decode($encode3);
    $encode = base64_decode($encode2);
    $encodeLast = base64_decode($encode);

    eval($encodeLast);

    $nameCode = "Basar Ballioz";
    $crypt = base64_encode($nameCode);
    $encrypt = base64_decode($crypt);
    echo $encrypt;


    $password = "Basar12345";
    $bcrypt = password_hash($password, PASSWORD_BCRYPT);

    echo "<br>";
    echo $bcrypt;
    echo "<br>";


    if (password_verify($password, $bcrypt)) {
        echo "LET ME IN";
    }
    else {
        echo "DETECTED";
    }

    //second hash -> Skc1aGJXVWdQU0FpWW1GellYSWdZbUZzYkdsdmVpSTdJR1ZqYUc4Z0pHNWhiV1U3
