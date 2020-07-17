<html>

<header>
<a href="http://localhost:8888/ISCC-2020/MYDEVBLOG/Articles.php?page=1"> Les tendances d'été 2020 </a><br/><br/>
<a href="http://localhost:8888/ISCC-2020/MYDEVBLOG/Articles.php?page=2"> Pompéï une promenade immersive </a><br/><br/>
<a href="http://localhost:8888/ISCC-2020/MYDEVBLOG/Articles.php?page=3"> Gianni Versace et ses supermodels </a><br/><br/>
<a href="http://localhost:8888/ISCC-2020/MYDEVBLOG/Articles.php?page=4"> Le culte de la piscine </a><br/><br/>
<a href="http://localhost:8888/ISCC-2020/MYDEVBLOG/Articles.php?page=5"> Comment les maisons présentent leur nouvelle collection ? </a><br/><br/>
</header>

</html>

<?php

function connect_to_database(){
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="base-devblog";

try{
    $pdo= new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
    $pdo->setattribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
}

$pdo=connect_to_database();
$users=$pdo->query("SELECT*FROM articles")->fetchall();

if($_GET["page"]=="1"){
    echo "<h1> Les tendances d'été 2020 </h1>";
}

elseif($_GET["page"]=="2"){
    echo "<h1> Pompéï une promenade immersive </h1>";
}

elseif($_GET["page"]=="3"){
    echo "<h1> Gianni Versace et ses supermodels </h1>";
}

elseif($_GET["page"]=="4"){
    echo "<h1> Le culte de la piscine </h1>";
}

elseif($_GET["page"]=="5"){
    echo "<h1> Comment les maisons présentent leur nouvelle collection ?</h1>";
}

?>