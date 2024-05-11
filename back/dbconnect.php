<?php

define("USER",'root');
define("SERVER",'localhost');
define("PWD",'');
define("DBNAME",'reservia');



$dsn ='mysql:host='.SERVER.';dbname='.DBNAME;

    try {
        $pdo= new PDO($dsn,USER,PWD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
    echo "Erreur: ".$e->getMessage();
    die();
}