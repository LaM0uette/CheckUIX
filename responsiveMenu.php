<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/responsiveMenu.html.css">
    <script defer src="js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="docs/Logo/Logo.svg">
    <title>CheckUIX</title>
</head>
<body>

<!--Main header-->
<a href="index.php"><?php include 'components/header/header-main-container.php'; ?></a>

<div class="url-container">

    <div class="url-link">
        <?php include 'components/inputs/input-link.php'; ?>
    </div>

    <h2 class="h2-or">Ou</h2>

    <div class="url-link">
        <?php
        $inputLinkLabel = "Fichier .html / .php :";
        $inputLinkPlaceholder = "C:\\...";
        $inputLinkType = "file";
        include 'components/inputs/input-link.php'; ?>
    </div>

</div>

<footer></footer>

</body>
</html>