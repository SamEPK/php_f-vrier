<?php
    include_once "./src/header.inc.php";
?>
<body>
    <header>
        <h1><?= title?></h1>
    </header>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le </h2>
            <p>
                Mise à jour PHP<br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        <?php
            include_once "./src/connect.inc.php";
        ?>
    <!--end -->
    </main>
    <footer>
        <p>&copy; - MIT - 2022</p>
    </footer>
</body>
</html>