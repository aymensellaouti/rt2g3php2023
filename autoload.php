<?php

function load($className) {
//    echo "Je suis dans autoload et je tente de charger la classe $className";
    include_once "$className.php";
}

spl_autoload_register('load');