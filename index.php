<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web application that allows you to test the responsive design of your websites. It also provides tools to generate or verify certain CSS properties, such as ensuring proper color contrast.">
    <title>CheckUIX - Responsive and ToolBox CSS</title>
    <link rel="stylesheet" href="css/index.html.css">
    <script defer src="js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="docs/Logo/Logo.svg">
</head>
<body>

<!--Main header-->
<?php include 'components/header/header-main-container.php'; ?>

<div class="nav-menu-container">
    <nav>
        <ul class="nav-menu">
            <li class="nav-menu-item"><a href="responsiveMenu.php"><?php $svgName = 'responsive'; include 'components/buttons/menu-item-link.php'; ?></a></li>
            <li class="nav-menu-item"><a href="responsiveMenu.php"><?php $svgName = 'colors'; include 'components/buttons/menu-item-link.php'; ?></a></li>
            <li class="nav-menu-item"><a href="responsiveMenu.php"><?php $svgName = 'toolBox'; include 'components/buttons/menu-item-link.php'; ?></a></li>
            <li class="nav-menu-item"><a href="responsiveMenu.php"><?php $svgName = 'check'; include 'components/buttons/menu-item-link.php'; ?></a></li>
        </ul>
    </nav>
</div>

<footer></footer>

</body>
</html>