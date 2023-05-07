<?php

    setcookie("nourriture_preferee", "pizza", time() + (86400 * 2), "/");
    setcookie("boisson_preferee", "cafe", time() + (86400 * 3), "/");
    setcookie("dessert_prefere", "Gateau au chocolat", time() + 86400, "/");

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_COOKIE["nourriture_preferee"])){
        echo "Tu dois acheter des {$_COOKIE["nourriture_preferee"]}s";
    }
    else{
        echo "Je ne sais pas quelle est ta nourriture préférée...";
    }

?>