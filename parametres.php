<?php

if (isset ($_SERVER['WINDIR'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "compte";
} else {
    $servername = "172.17.0.2";
    $username = "root";
    $password = "a";
    $dbname = "gestionb";
}

