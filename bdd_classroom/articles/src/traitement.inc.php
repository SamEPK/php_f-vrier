<?php
    try{
        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $_bdd = new PDO('mysql:host=localhost;
        dbname=post', 
        'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
    }
    catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
//tester nos variables
if(isset($_POST["titre"]) || isset($_POST['contenu'])){
    if(!$_POST["titre"] || !$_POST["contenu"]){
        print "<p class=\"warning\"> champs vides veuillez les remplir</p>";

    }
    else if(is_numeric($_POST["contenu"])){
        print "<p class=\"warning\"> veuillez saisir des lettres</p>";
    }
    else{
        $date_publication = date("Y-m-d:H:i:s");
        $_req = $_bdd->prepare('INSERT INTO content(titre, contenu, date_creation)VALUES(?,?,?)');
        $_req->execute(array(htmlentities($_POST['titre']), $_POST['contenu'], $date_publication));
        print '<p> 
                Vos données ont envoyées<br> 
                <a href="index.php">Voir les publications</a>
            </p>';

    }

}
?>