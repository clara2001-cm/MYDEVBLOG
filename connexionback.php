<?php

if(!empty($_POST['Nom et Prénom'])AND !empty($_POST['E-mail']) AND !empty($_POST['Message']))
{

}
else{
    $msg="Vous devez remplir tout les champs";
}

?>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="connexiobback.css">  
</head>
<meta charset="utf-8"/>

        <header>
            <h1> Page Contact</h1> 
</header>

<body>
    <h2>Veuilliez renseigner vos coordonnées</h2>

<h1>Coordonées :</h1>

<form method="POST" action="">
    <input type="text" name="Nom et Prénom"  placeholder="Votre nom et prénom" /><br></br>
    <input type="password" name="mot de passe" placeholder="votre mot de passe"/><br></br>
    <input type="submit" value="Envoyer" name="mailform"/>
</form>
</html>

<?php

if(isset($msg))
{
    echo $msg;
}
?>
