<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Application web qui vous permet de tester le responsive design de vos sites web. Il fournit également des outils pour générer ou vérifier certaines propriétés CSS, telles que la garantie d'un contraste de couleur approprié.">
    <title>CheckUIX - Responsive et ToolBox CSS</title>
    <link rel="stylesheet" href="css/index.html.css">
    <script defer src="js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="docs/Logo/Logo.svg">
</head>
<body>

<!--Main header-->
<?php include 'components/header/header-main-container.php'; ?>

<main class="nav-menu-container">
    <nav>
        <ul class="nav-menu">
            <li class="nav-menu-item">
                <a href="responsiveMenu.php">
                    <?php
                    $menuItemSvgName = 'responsive';
                    $menuItemTitle = 'Responsive design';
                    $menuItemDescription = "Outil permettant de tester le responsive de son site à l'aide de pré-réglages prêts à l'emploi.";
                    include 'components/buttons/menu-item-link.php'; ?>
                </a>
            </li>

            <li class="nav-menu-item">
                <a href="responsiveMenu.php">
                    <?php
                    $menuItemSvgName = 'colors';
                    $menuItemTitle = 'Couleurs';
                    $menuItemDescription = "";
                    include 'components/buttons/menu-item-link.php';
                    ?>
                </a>
            </li>

            <li class="nav-menu-item">
                <a href="responsiveMenu.php">
                    <?php
                    $menuItemSvgName = 'toolBox';
                    $menuItemTitle = 'ToolBox';
                    $menuItemDescription = "";
                    include 'components/buttons/menu-item-link.php';
                    ?>
                </a>
            </li>

            <li class="nav-menu-item">
                <a href="responsiveMenu.php">
                    <?php
                    $menuItemSvgName = 'check';
                    $menuItemTitle = 'UIX Check';
                    $menuItemDescription = "";
                    include 'components/buttons/menu-item-link.php';
                    ?>
                </a>
            </li>
        </ul>
    </nav>
</main>

<footer></footer>

</body>
</html>