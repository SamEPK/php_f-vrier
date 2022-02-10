<?php
include_once('./src/header.inc.php');
?>
<body>
    <header>
        <h1><?= title ?></h1>
    </header>
<main>
<div class="form" role="region">
    <fieldset>
        <legend>Rechercher un article</legend>
                <?php
                    //connexion à la bdd
                ?>
                
            <form action="<?php $_SERVER['PHP_SELF']?>" method="get"><!-- get -->
                <label for="titre">Faîtes votre recherche</label>
                    <input type="search" name="q" placeholder="Recherche..." autofocus>
                    <input type="submit" value="Envoyer">
            </form>
                
               
        </fieldset>
        <?php
            //affichage de la recherche
        ?>
        

</div>
 
</main>
<footer>
        <p>&copy; - MIT - <?= $_date_php ?></p>
</footer>
</html>