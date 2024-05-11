<?php

require_once "dbconnect.php";

echo "NOOOOOOOOOOOOOOOOOOO<br>";

var_dump($_POST);

if($_SERVER['REQUEST_METHOD']=="POST"){
    $source = $_POST['source'];
    $pname = $_POST['pname'];
    echo "$pname";
    $prix = $_POST['prix'];
    $stars = $_POST['stars'];
    $about = $_POST['about'];
}

echo "nooooooooooooooooo<br>";

try {
    $sql = "INSERT INTO reservia.informations (Nom,Source,About,Prix,Etoiles) VALUES (:pname, :source, :about ,:prix, :stars );";
    $result = $pdo->prepare($sql);
    $result->bindParam(':pname',$pname);
    $result->bindParam(':source',$source);
    $result->bindParam(':prix',$prix);
    $result->bindParam(':stars',$stars);
    $result->bindParam(':about',$about);

    $result->execute();

} catch (PDOException $th) {
    die("Error : ".$th->getMessage());
}