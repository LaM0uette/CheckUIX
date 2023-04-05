<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.html.css">
    <script defer src="js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="docs/Logo/Logo.svg">
    <title>CheckUIX</title>
</head>
<body>

<!--Main header-->
<?php include 'components/header/header-main-container.php'; ?>

<div class="nav-menu-container">
    <nav>
        <ul class="nav-menu">
            <li class="nav-menu-item item-1"><a href="responsiveMenu.php"><?php $itemName = 'responsive'; include 'components/buttons/menu-item-link.php'; ?></a></li>
            <li class="nav-menu-item item-2"><a href="responsiveMenu.php"><?php $itemName = 'colors'; include 'components/buttons/menu-item-link.php'; ?></a></li>
            <li class="nav-menu-item item-3"><a href="responsiveMenu.php"><?php $itemName = 'toolBox'; include 'components/buttons/menu-item-link.php'; ?></a></li>
            <li class="nav-menu-item item-4"><a href="responsiveMenu.php"><?php $itemName = 'checks'; include 'components/buttons/menu-item-link.php'; ?></a></li>
        </ul>
    </nav>
</div>

<footer></footer>

</body>
</html>