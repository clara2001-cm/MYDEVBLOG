<?php

if(!empty($_POST['Titre'])AND !empty($_POST['Image']) AND !empty($_POST['Date'])AND !empty($_POST['Auteur'])AND !empty($_POST['Texte'])AND !empty($_POST['Extrait']))
{

}
else{
    $msg="Vous devez remplir tout les champs";
}

?>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="ajoutarticle.css">  
</head>
<meta charset="utf-8"/>

        <header>
            <h1> Ajout d'un Article</h1> 
</header>

<body>
    <h2>Veuillez Ecrire votre Article</h2>

<h1>Coordonées :</h1>

<form method="POST" action="">
    <input type="text" name="Titre"  placeholder="Votre Titre" /><br></br>
    <input type="image" name="Image" placeholder="Insérez une image"/><br></br>
    <input type="text" name="Date" placeholder="Renseignez la date"/><br></br>
    <input type="text" name="Auteur" placeholder="Nom de l'auteur"/><br></br>
    <input type="text" name="Texte" placeholder="Votre texte"/><br></br>
    <input type="text" name="Extrait" placeholder="Ecrivez un extrait"/><br></br>
    <input type="submit" value="Envoyer" name="mailform"/>
</form>
</html>

<?php

if(isset($msg))
{
    echo $msg;
}
?>