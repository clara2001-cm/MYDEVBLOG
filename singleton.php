<?php

function connect_to_database(){
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="base-devblog";
}

try {
    $pdo= new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
    $pdo->setattribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
    echo "connected successfully to database";
    return $pdo;

    echo""."<br/>";
    return $pdo;
}

catch (PDOExeption $e){
    echo "connection failed". $e->getmessage();
}

$pdo=connected_to_database();

$users= $pdo->query("SELECT*FROM Articles")->fetchALL();

foreach($users as $user){
    echo "<a href=Articles.php>".$user["titre"]."</a><br/>";
    echo $user["date"]."</a><br/>";
    echo $user["auteur"]."</a><br/>";
    echo $user["texte"]."</a><br/>";
    echo $user["extrait"]."</a><br/>";
    echo "<img src='".$user["image"]."'/>";
}

?>